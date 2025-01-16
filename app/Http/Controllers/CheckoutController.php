<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CheckoutController extends Controller
{
    // Menangani proses checkout
    public function processCheckout(Request $request)
    {
        // Ambil produk berdasarkan ID dari request
        $product = Product::findOrFail($request->product_id);
        
        // Tambahkan produk ke keranjang (session)
        $cart = session()->get('cart', []);
        
        // Tambahkan atau update produk dalam keranjang
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price
            ];
        }

        // Simpan keranjang ke session
        session()->put('cart', $cart);

        // Redirect ke halaman pembayaran
        return redirect()->route('paymentPage');
    }

    // Menampilkan halaman pembayaran
    public function paymentPage()
    {
        $cart = session('cart', []);
        return view('payment', compact('cart'));
    }
}
