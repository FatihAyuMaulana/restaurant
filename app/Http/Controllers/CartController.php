<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Menu;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart($id)
    {
        // Temukan menu berdasarkan ID
        $menu = Menu::find($id);

        if (!$menu) {
            return redirect()->back()->with('error', 'Menu not found.');
        }

        // Ambil keranjang dari session (atau array kosong jika belum ada)
        $cart = session()->get('cart', []);

        // Jika item sudah ada di keranjang, tambahkan quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            // Jika belum ada, tambahkan item baru ke keranjang
            $cart[$id] = [
                "name" => $menu->nama_makanan,
                "quantity" => 1,
                "price" => $menu->harga,
                "image" => $menu->foto_makanan
            ];
        }

        // Simpan kembali ke session
        session()->put('cart', $cart);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Menu added to cart!');
    }

    public function viewCart()
    {
        // Ambil keranjang dari session
        $cart = session()->get('cart', []);

        // Tampilkan view untuk menampilkan isi keranjang
        return view('cart', compact('cart'));
    }

    // Fungsi untuk menghapus item dari keranjang
    public function removeFromCart($id)
    {
        // Ambil keranjang dari session
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Menu removed from cart.');
    }

    // Fungsi untuk memperbarui quantity item di keranjang
    public function updateCart(Request $request, $id)
    {
        // Ambil keranjang dari session
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            // Ambil quantity baru dari form
            $newQuantity = $request->input('quantity');

            // Pastikan quantity positif
            if ($newQuantity > 0) {
                $cart[$id]['quantity'] = $newQuantity;
            } else {
                // Jika quantity 0, hapus item dari keranjang
                unset($cart[$id]);
            }

            // Simpan kembali ke session
            session()->put('cart', $cart);
        }

        return redirect()->back();
    }

    public function checkout()
    {
        // Ambil keranjang dari session
        $cart = session()->get('cart');

        if (!$cart) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        // Buat deskripsi transaksi
        $deskripsi = "";
        $totalPrice = 0;

        foreach ($cart as $id => $details) {
            $itemTotal = $details['price'] * $details['quantity'];
            $deskripsi .= $details['quantity'] . " " . $details['name'] . " Rp. " . number_format($details['price'], 0, ',', '.') . " = Rp. " . number_format($itemTotal, 0, ',', '.') . "\n";
            $totalPrice += $itemTotal;
        }

        // Tambahkan total keseluruhan di akhir deskripsi
        $deskripsi .= "Total: Rp. " . number_format($totalPrice, 0, ',', '.');

        // Simpan transaksi ke database
        $transaction = Transaction::create([
            'user_id' => Auth::id(), // Mendapatkan ID user yang sedang login
            'tgl_transaksi' => now(),
            'status' => 'success', // Status default 'success'
            'deskripsi' => $deskripsi,
            'total_harga' => $totalPrice
        ]);

        // Kosongkan keranjang setelah checkout
        session()->forget('cart');

        // Redirect ke halaman struk dengan transaction ID
        return redirect()->route('cart.receipt', ['id' => $transaction->id]);
    }

    public function showReceipt($id)
    {
        // Ambil transaksi berdasarkan ID
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return redirect()->route('cart.view')->with('error', 'Transaction not found.');
        }

        // Tampilkan struk transaksi
        return view('receipt', compact('transaction'));
    }
}
