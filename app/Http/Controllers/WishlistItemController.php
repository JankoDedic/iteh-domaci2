<?php

namespace App\Http\Controllers;

use App\Models\WishlistItem;
use Illuminate\Http\Request;

class WishlistItemController extends Controller
{
    public function add(Request $request)
    {
        WishlistItem::create([
            'user_id' => auth()->user()->id,
            'product_id' => $request['product_id'],
        ]);

        return response()->json(['message' => 'Product added to wishlist!']);
    }

    public function remove(Request $request)
    {
        WishlistItem::where('user_id', auth()->user()->id)
            ->where('product_id', $request['product_id'])
            ->delete();

        return response()->json(['message' => 'Product removed from wishlist!']);
    }
}
