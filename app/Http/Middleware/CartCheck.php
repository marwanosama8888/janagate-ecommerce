<?php

namespace App\Http\Middleware;

use App\Models\CartItem;
use Closure;
use Illuminate\Http\Request;

class CartCheck
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
        if (auth()->user()) { //always false
            $loggedin_user_id = auth()->user()->id;
            $basket_count = CartItem::where('user_id',$loggedin_user_id)->count();

            view()->share('basket_count', $basket_count);

        }else {
            view()->share('basket_count', '');
        }

        return $next($request);    }
}
