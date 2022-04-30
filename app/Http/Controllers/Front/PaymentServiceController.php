<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PaymentServiceController extends Controller
{
    public function index()
    {
        $cartItem = Cart::content();

        $images = [];
        foreach ($cartItem as $item) {
            $product = Product::find($item->id);
            $mediaUrl = $product->getFirstMediaUrl();
            array_push($images, $mediaUrl);
        }

        return view('pages.checkout-form', ['cartItem' => $cartItem, 'images' => $images]);
    }
    public function getCheckOutId(Request $request)
    {
        $url = "https://eu-test.oppwa.com/v1/checkouts";
        $data = "entityId=8a8294174b7ecb28014b9699220015ca" .
            "&amount=" . $request->price .
            "&currency=EUR" .
            "&paymentType=DB";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='
        ));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if (curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);

        $res = json_decode($responseData, true);

        $view = view('pages.checkout-payment')->with(['responseData' => $res])
            ->renderSections();

        return response()->json([
            'status' => true,
            'content' => $view['main']
        ]);
    }
    public function saveInfo(Request $request)
    {

        $data = Session::put('info',$request->all());
        return Session::get('info');
    }
}
