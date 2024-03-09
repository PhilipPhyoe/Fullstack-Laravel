<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function Add(Request $request, $id)
    {
        if (Auth::id()) {
            return redirect()->back();
        } else {
            return redirect('login');
        }
    }
}
