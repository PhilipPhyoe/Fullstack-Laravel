<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function Add(Request $request, $id)
    {
        if (Auth::id()) {

            $user = auth()->user();

            $cart = new Cart();
            $product = Product::find($id);

            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->title = $product->name;
            $cart->quantity = $request->quantity;
            $cart->price = $product->unit_price;
            $cart->save();

            return redirect()->back()->with('message', 'Product is added to the cart successfully.');
        } else {
            return redirect('login');
        }
    }
}
