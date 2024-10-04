<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    public function addToCart($id)
    {
        $item = Item::find($id); // Ambil item berdasarkan ID
        $cart = session()->get('cart', []);

        // Tambahkan item ke keranjang
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $item->name,
                "quantity" => 1,
                "price" => $item->price,
                "image" => $item->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Item added to cart!');
    }

    public function viewCart()
    {
        $cart = session()->get('cart');
        return view('cart', compact('cart'));
    }
}
