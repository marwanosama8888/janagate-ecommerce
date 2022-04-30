<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SCategory;
use App\Models\SubCategory;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::with('subCategories')->get();
        // return $data;
        return view('pages.category', ['data' =>$data]);
    }



    public function showSubCategory($slug)
    {
        $data = SCategory::where('slug', $slug)->first();

        if (!$data) {
            abort(404);
        }
        $data->setRelation('products', $data->products()->where('active',1)->paginate(15));

        return view('pages.subcategories', ['data' => $data]);
    }


    public function category($slug)
    {
        $subCategoryIDs = [];
        $category = Category::where('slug', $slug)->with('subCategories')->first();
        if (!$category->count()) {
            abort(404);
        }
        foreach ($category->subCategories as $value) {
            array_push($subCategoryIDs, $value->id);
        }
        $pivotTable = DB::table('subcategory_product')->whereIn('subcategory_id', $subCategoryIDs)->pluck('product_id');


        $data = Product::whereIn('id', $pivotTable)->where('active',1)->paginate(12);
        // return $productIds;
        return view('pages.categories', ['data' => $data,'title'=>$category->name]);
    }
}
