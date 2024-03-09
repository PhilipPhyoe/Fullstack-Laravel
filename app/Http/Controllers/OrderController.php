<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function Add($id)
    {
        if (Auth::id()) {

            $user = auth()->user();

            $order = new Order();
            $cart = Cart::find($id);

            $order->cart_id = $cart->id;
            $order->user_id = $cart->user_id;
            $order->customer_name = $cart->name;
            $order->customer_email = $cart->email;
            $order->product_name = $cart->title;
            $order->product_price = $cart->price;
            $order->product_quantity = $cart->quantity;
            $order->save();

            return redirect()->back()->with('message', 'We receive your order successfully.');
        } else {
            return redirect('login');
        }
    }
}
