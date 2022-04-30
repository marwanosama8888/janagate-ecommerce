<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class checkout
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Cart::count() <= 0) {
            return redirect('categories')->with(['error' => 'There is no products to buy']);
        }
        return $next($request);
    }
}
