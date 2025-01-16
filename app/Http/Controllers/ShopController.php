<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Ambil semua data produk
        return view('shop.index', compact('products'));
    }
}
