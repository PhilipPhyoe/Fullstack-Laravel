<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Redirect()
    {
        $user = auth()->user();

        $count = Cart::where('email', $user->email)->count();

        return view('home');
    }
}
