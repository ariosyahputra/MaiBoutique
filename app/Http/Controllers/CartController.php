<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Transaction;
use App\Models\Transaction_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $carts = Auth::user();
        $totalPrice = 0;
        $totalQuantity = 0;

        foreach ($carts->products as $cart) {
            $totalPrice += (int)($cart->pivot->quantity * $cart->price);
            $totalQuantity += $cart->pivot->quantity;
        }

        return view('cart', [
            'carts' => $carts,
            'totalQuantity' => $totalQuantity,
            'totalPrice' => $totalPrice
        ]);
    }

    public function detail(Product $id)
    {
        $product = Auth::user()->products->find($id);
        return view('editCart', ['product' => $product]);
    }

    public function editCart(Request $request, Product $id)
    {

        $data = $request->validate([
            'quantity' => 'required|numeric|min:1'
        ]);

        $product = Auth::user()->products->find($id);

        if ($product->count() > 0) {
            Cart::where('product_id', $id->id)
                ->where('user_id', Auth::user()->id)
                ->update(['quantity' => $data['quantity']]);
        }

        return redirect(route('cart'));
    }

    public function deleteCart(Product $id)
    {
        Cart::where('user_id', Auth::user()->id)->where('product_id', $id->id)->delete();

        return redirect(route('cart'));
    }

    public function checkOut()
    {
        $products = Auth::user()->products;

        if ($products->count() > 0) {
            Transaction::create([
                'user_id' => Auth::user()->id,
                'transaction_date' => Carbon::now()->format('Y-m-d')
            ]);

            $latestTransactionId = Transaction::latest()->first()->id;
            foreach ($products as $product) {
                Transaction_detail::create([
                    'transaction_id' => $latestTransactionId,
                    'product_id' => $product->id,
                    'quantity' => $product->pivot->quantity
                ]);
            }

            Cart::where('user_id', Auth::user()->id)->delete();
        }

        return redirect(route('history'));
    }
}
