<?php

namespace App\Http\Controllers;
use\App\Models\Product.php;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //

    function index()
{
      $data = Products::all();
    return view('product', ['products'=>$data]);
}

function detail($productname)

{
$data = Product::find ($productname);
    return view ('detail',['product' => $data]);
   

}

function addToCart(Request  $req){

return "Hello";
}
}