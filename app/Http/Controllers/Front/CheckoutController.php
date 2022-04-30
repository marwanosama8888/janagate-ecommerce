<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\orderconfirm;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function redirect()
    {
        $cartItem = Cart::content();

        $images = [];
        foreach ($cartItem as $item) {
            $product = Product::find($item->id);
            $mediaUrl = $product->getFirstMediaUrl();
            array_push($images, $mediaUrl);
        }


        if (request('id') && request('resourcePath')) {
            $payment_status = $this->getPaymentStatus(request('id'), request('resourcePath'));

            if (array_key_exists('id', $payment_status)) { //success payment id -> transaction bank id
                $info = Session::get('info');

                $data = Order::create([
                    'order_number'         =>  'ORD-' . strtoupper(uniqid()),
                    'user_id'              => auth('customers')->user()->id,
                    'status'               =>  'pending',
                    'grand_total'          =>  Cart::total(),
                    'item_count'           =>  Cart::count(),
                    'payment_status'       =>  1,
                    'payment_method'       =>  $payment_status['paymentBrand'],
                    'first_name'           =>  $info['first_name'],
                    'last_name'            =>  $info['last_name'],
                    'address'              =>  $info['address'],
                    'country'              =>  $info['country'],
                    'city'                 =>  $info['city'],
                    'phone_number'         =>  $info['phone_number'],
                    'bank_transaction_id'  =>  $payment_status['id']
                ]);

                $orderItem = Cart::content();


                foreach ($orderItem as $key => $value) {
                    $productId = $value->id;
                    $productQty = $value->qty;
                    $productPrice = $value->price;

                    foreach ($value->options as $key => $value) {
                        if ($key == '') {
                            $product = Product::find($productId);

                            $orderItem = new OrderItem([
                                'product_id'    =>  $product->id,
                                'product_title'    =>  $product->name,

                                'quantity'      =>  $productQty,
                                'price'         =>  $productPrice,
                            ]);
                            $data->items()->save($orderItem);
                        } else {

                            $product = Product::find($productId);

                            $orderItem = new OrderItem([
                                'product_id'    =>  $product->id,
                                'product_title'    =>  $product->name,

                                'quantity'      =>  $productQty,
                                'price'         =>  $productPrice,
                                'prop'          =>  $key . ' : ' . $value
                            ]);
                            $data->items()->save($orderItem);
                        }
                    }
                }
                Mail::to(auth('customers')->user()->email)
                    ->queue(new orderconfirm($data->id,$data->order_number,auth('customers')->user()->username));

                    $showSuccessPaymentMessage = true;

                //save order in orders table with transaction id  = $payment_status['id']
                return view('pages.checkout-form', compact('cartItem', 'images'))->with(['success' =>  'تم الدفغ بنجاح']);
            } else {
                $showFailPaymentMessage = true;
                return view('pages.checkout-form', compact('cartItem', 'images'))->with(['fail' =>  'يوجد مشكله في عمليه الدفع']);
            }
        }
        return view('pages.checkout-form', compact('cartItem', 'images'));
    }

    private function getPaymentStatus($id, $resourcepath)
    {
        $url = config('payment.hyperpay.url');
        $url .= $resourcepath;
        $url .= "?entityId=" . config('payment.hyperpay.entity_id');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer ' . config('payment.hyperpay.auth_key')
        ));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, config('payment.hyperpay.production')); // this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if (curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        return json_decode($responseData, true);
    }
}
