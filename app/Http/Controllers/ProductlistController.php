<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProductlistController extends Controller
{
    public function productlist() {
        return view('homepage.product', [
            'products' => Produk::with('images','discount')->orderBy('id', 'DESC')->get(),
            
        ]);
    }
}
