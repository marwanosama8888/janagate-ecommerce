<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\ProductAccept;
use App\Mail\productadd;
use App\Mail\refuseProduct;
use App\Models\Category;
use App\Models\PendingProduct;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Str;

class VendorController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return view('vendors.category', compact('data'));
    }


    public function indexCategory($slug)
    {
        $data = Category::whereSlug($slug)->with('subCategories')->first();
        return view('vendors.form', compact('data'));
    }

    public function store(Request $request)
    {
        return $request->keys;
        $validator = Validator::make($request->all(), [
            'product_title' => 'required|max:255',
            'sub_category' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = new PendingProduct();
        $data->vendor_id = auth('vendors')->id();
        $data->product_title = $request->get('product_title');
        $data->slug = Str::slug($request->get('product_title'));
        $data->sub_category = $request->get('sub_category');
        $data->price = $request->get('price');
        $data->description = $request->get('description');
        $data->info = $request->get('info');
        $data->material = $request->get('material');
        $data->weight = $request->get('weight');
        $data->widthHeight = $request->get('widthHeight');
        $data->save();

        for ($i = 1; $i <= 4;) {

            if ($request->hasFile('image' . $i)) {
                $data->addMediaFromRequest('image' . $i)
                    ->toMediaCollection();
            }
            $i++;
        }
        if (!$request->hasFile('image1') && !$request->hasFile('image2') && !$request->hasFile('image3') &&  !$request->hasFile('image4')) {
            redirect()->back()->with('fail', '! المنتج ليس لديه صور ');
        }

        if ($data) {
            Mail::to(auth('vendors')->user()->email)

                ->queue(new productadd('marwan'));
        }
        return redirect()->back()->with('success', 'Product send to admins successfully');
    }

    public function accept($id)
    {
        $pendingProduct = PendingProduct::findOrFail($id);

        if (!$pendingProduct) {
            abort(404);
        }

        $data = new Product();
        $data->name  = $pendingProduct->product_title;
        $data->vendor_id  = $pendingProduct->vendor_id;
        $data->slug  = $pendingProduct->slug;
        $data->description  = $pendingProduct->description;
        $data->active  = $pendingProduct->active;
        $data->price  = $pendingProduct->price;
        $data->info  = $pendingProduct->info;
        $data->material  = $pendingProduct->material;
        $data->weight  = $pendingProduct->weight;
        $data->widthHeight  = $pendingProduct->widthHeight;
        $data->save();
        $mediaItem = $pendingProduct->getMedia();
        if ($mediaItem) {
            foreach ($mediaItem as $value) {

                $value->move($data);
            }
        }
        if ($pendingProduct->sub_category) {
            $data->subcategories()->attach($pendingProduct->sub_category);
        }

        $vendor = Vendor::find($pendingProduct->vendor_id);
        Mail::to($vendor->email)

            ->queue(new ProductAccept($pendingProduct->product_title, $vendor->company_name));




        $pendingProduct->active = 1;
        $pendingProduct->delete();
        return redirect('admin/pending-products');
    }

    public function refuse($id)
    {
        $data = PendingProduct::findOrFail($id);
        $user  = Vendor::find($data->vendor_id);

        Mail::to('marwan.osama8888@gmail.com')

        ->queue(new refuseProduct($user->company_name,$data->product_title));
        $data->delete();
        return redirect('admin/pending-products');
    }
}
