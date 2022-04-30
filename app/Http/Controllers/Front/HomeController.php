<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

    public function index()
    {



        $products = Product::all();
        foreach ($products as $product) {
            $photos = [];
            if (count($product->getMedia()) > 1) {
                foreach ($product->getMedia() as $image) {
                    array_push($photos, $image->getUrl());
                }
            } else {
                array_push($photos, url('https://picsum.photos/820/300'));
            }
            $product->photos = $photos;
        }

        return view('pages.home', ['product' => $products]);
    }

}
