<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $cart = session()->get('cart', []);

        $name = $request->input('name');
        $price = $request->input('price');
        $productId = $request->input('productId');


        if (isset($cart[$name])) {
            $cart[$name]['quantity'] += 1;
        } else {
            $cart[$name] = [
                'productId' => $productId,
                'name' => $name,
                'price' => $price,
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);

        return response()->json($cart);
    }
}
