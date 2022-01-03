<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $getProducts = Product::all();

        return view('adminapp.produk', compact('getProducts'));
    }
    
}
