<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\SCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($slug)
    {
        $data = Product::where('slug', $slug)->where('active',1)->with(['subCategories','productProps'])->first();
        if ($data == null) {
            abort(404);
        }
        $propsKey = $data->productProps;
        $subCategory = $data->subCategories;
        foreach ($subCategory as $value) {
            $subCategoryId =  $value->id;
        }
        $relatedProducts = SCategory::find($subCategoryId)->with('products')->first();
        return view('pages.details', [
            'data' => $data,
            'propsKeys' => $propsKey,
            'relatedProducts' => $relatedProducts
        ]);
    }

}
