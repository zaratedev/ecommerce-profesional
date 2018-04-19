<?php

namespace App\Http\Middleware;

use Closure;
use App\ShoppingCart;

class SetShoppingCart
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $shopping_cart_id = \Session::get('shopping_cart_id');
        $shopping_cart = ShoppingCart::findOrCreatedById($shopping_cart_id );
        \Session::put("shopping_cart_id",$shopping_cart->id);

        $request->shopping_cart = $shopping_cart;

        return $next($request);
    }
}
