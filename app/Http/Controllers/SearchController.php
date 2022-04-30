<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        $result = Product::where('name', 'LIKE', '%' . $request->get('name') . '%')->paginate(15);
        if ($result->total() == 0) {
            return view('pages.search')->with(['message' =>  'There Is No Product With This Name']);
        }

        return view('pages.search' ,compact('result') );
    }
}
