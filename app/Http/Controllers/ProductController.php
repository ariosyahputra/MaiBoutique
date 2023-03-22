<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(8);
        return view('home', ['products' => $products]);
    }

    public function detail(Product $id)
    {
        return view('productDetail', ['product' => $id]);
    }

    public function addItem()
    {
        return view('addItem');
    }

    public function add(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg',
            'name' => 'required|string|min:5|max:20|unique:products',
            'description' => 'required|string|min:5',
            'price' => 'required|numeric|min:1000',
            'stock' => 'required|numeric|min:1'
        ]);

        $file = $request->file('image');

        $imageName = time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/images', $file, $imageName);

        $data['image'] = $imageName;


        Product::create($data);

        return redirect(route('home'));
    }

    public function addToCart(Request $request, Product $id)
    {

        $data = $request->validate([
            'quantity' => 'required|numeric|min:1'
        ]);

        $product =  Cart::where('product_id', $id->id)->where('user_id', Auth::user()->id)->get();

        if ($product->count() > 0) {
            Cart::where('product_id', $id->id)
                ->where('user_id', Auth::user()->id)
                ->update(['quantity' => $data['quantity']]);
        } else {
            Cart::create([
                'user_id' => Auth::user()->id,
                'product_id' => $id->id,
                'quantity' => $data['quantity']
            ]);
        }

        return redirect(route('home'));
    }

    public function deleteItem(Product $id) {
        File::delete(public_path('storage/images/' . $id->image));
        $id->delete();

        return redirect(route('home'));
    }
}
