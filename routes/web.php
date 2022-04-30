<?php

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\CategoryController;
use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\Front\PaymentServiceController;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\Front\VendorAuthController;
use App\Http\Controllers\Front\VendorController;
use App\Http\Controllers\Front\LandingPageController;
use App\Http\Controllers\SearchController;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => LaravelLocalization::setLocale(),	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function () {



    Route::get('/', [HomeController::class, 'index'])->middleware('cartCheck');
    Route::get('contact-us', [LandingPageController::class, 'index'])->name('landing.page');
    Route::get('new-message', [LandingPageController::class, 'create'])->name('new.message');


    //cart

    Route::get('cart', [CartController::class, 'index'])->name('index-cart');
    Route::post('add-cart', [CartController::class, 'create'])->name('add-cart');
    Route::post('update-cart', [CartController::class, 'update'])->name('update-cart');
    Route::post('remove-cart', [CartController::class, 'remove'])->name('remove-cart');

    Route::get('categories', [CategoryController::class, 'index']);

    Route::get('category/{slug}', [CategoryController::class, 'category']);

    Route::get('sub-category/{slug}', [CategoryController::class, 'showSubCategory']);

    Route::get('product/{slug}', [ProductController::class, 'index']);


    Route::get('search', [SearchController::class, 'search'])->name('search');


    // vendors

    Route::prefix('vendor')->group(function () {
        Route::middleware(['guestVendors'])->group(function () {

            Route::get('login', [VendorAuthController::class, 'createLogin']);
            Route::post('store-login', [VendorAuthController::class, 'storeLogin']);
            Route::get('register', [VendorAuthController::class, 'createRegister']);
            Route::post('store-register', [VendorAuthController::class, 'storeRegister']);
        });

        Route::get('accept/{id}', [VendorController::class, 'accept'])->middleware('auth');
        Route::get('refuse/{id}', [VendorController::class, 'refuse'])->middleware('auth');

        Route::middleware(['vendors'])->group(function () {
            Route::get('/', [VendorController::class, 'index'])->name('vendor-category');
            Route::get('new-product/{slug}', [VendorController::class, 'indexCategory']);
            Route::post('store', [VendorController::class, 'store']);
            Route::post('vendor-logout', [VendorAuthController::class, 'destroy']);
        });
    }); // end vendors



    // checkout routes
    Route::middleware(['checkout', 'customers'])->group(function () {
        Route::get('checkout-form', [PaymentServiceController::class, 'index']);
        Route::post('get-checkout-id', [PaymentServiceController::class, 'getCheckOutId'])->name('product.checkout');
        Route::post('save-info', [PaymentServiceController::class, 'saveInfo'])->name('save.info');
        Route::get('redirect', [CheckoutController::class, 'redirect'])->name('redirect');
    });


});
Route::get('test', function () {
    return Order::where('id',12)->with('items')->get();
});
require __DIR__ . '/auth.php';
