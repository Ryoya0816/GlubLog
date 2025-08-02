<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Review;

class StoreController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $rating = $request->input('rating');

        $query = Store::query();

        if ($keyword) {
            $query->where('name', 'like', "%{$keyword}%")
                  ->orWhere('comment', 'like', "%{$keyword}%") // description → comment に修正
                  ->orWhere('address', 'like', "%{$keyword}%");
        }

        if ($rating) {
            $query->where('average_rating', '>=', $rating);
        }

        $stores = $query->paginate(5);

        return view('stores', compact('stores', 'keyword', 'rating'));
    }

    public function show(Store $store)
    {
        $reviews = $store->reviews()->with('user')->get();

        // ← 修正ポイント
        return view('store', compact('store', 'reviews'));
    }
    
}
