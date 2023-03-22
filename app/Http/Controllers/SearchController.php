<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index() {
        $products = Product::orderBy('id', 'desc')->paginate(8);
        return view('search', ['products' => $products]);
    }

    public function search(Request $request) {
        $products = Product::where('name', 'LIKE', "%$request->search%")->paginate(8);
        return view('search', ['products' => $products]);
    }
}
