<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\WishlistItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WishlistItemController extends Controller
{
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        if (is_null(Product::find($request['product_id']))) {
            return response()->json(['message' => 'Product not found']);
        }

        WishlistItem::create([
            'user_id' => auth()->user()->id,
            'product_id' => $request['product_id'],
        ]);

        return response()->json(['message' => 'Product added to wishlist!']);
    }

    public function remove(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        if (is_null(Product::find($request['product_id']))) {
            return response()->json(['message' => 'Product not found']);
        }

        WishlistItem::where('user_id', auth()->user()->id)
            ->where('product_id', $request['product_id'])
            ->delete();

        return response()->json(['message' => 'Product removed from wishlist!']);
    }
}
