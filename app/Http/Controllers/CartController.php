<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Products;

class ProductsController extends Controller
{
    public function add_cart()
    {
        $products = Product::all();
        return view('products', compact ('products'));
    }
}
