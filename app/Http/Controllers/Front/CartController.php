<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{

    public function index()
    {

        $cartItem = Cart::content();
        // return $cartItem;
        // foreach ($cartItem as $key => $value) {
        //     # code...
        //     return $value->options;
        // }
        $images = [];

        foreach($cartItem as $item){
            $product = Product::find($item->id);
            $mediaUrl = $product->getFirstMediaUrl();
            array_push($images,$mediaUrl);
        }

        return view('pages.cart', ['cartItem' => $cartItem,'images'=>$images]);
    }
    public function create(Request $request)
    {

        $product = Product::findOrFail($request->input('id'));
        // dd($product);
        Cart::add($product->id, $product->name, 1, $product->price, 34, [$request->input('key') => $request->get('value')]);


        return redirect('cart');
    }
    public function update(Request $request)
    {
        $rowId = $request->rowId;

        Cart::update($rowId, $request->qty);

        return redirect('cart');
    }
    public function remove(Request $request)
    {
        Cart::remove($request->rowId);
        return redirect('cart');
    }
}
