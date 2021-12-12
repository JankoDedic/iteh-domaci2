<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function wishlist()
    {
        return response()->json(auth()->user()->wishlistItems()->getResults());
    }
}
