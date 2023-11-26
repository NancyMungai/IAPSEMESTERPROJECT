<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function detail($productname)
    {
        $data = Product::where('product_name', $productname)->first();
        return view('detail', ['product' => $data]);
    }

    public function addToCart(Request $request)
    {
        // You can access the product name using $request->input('product-name')
        // Perform your cart logic here
        return "Product added to cart successfully!";
    }

    // public function singleProduct()
    // {
    //     $products = Product::all();
    //     return view('singleProduct', ['Products' => $products]);
    // }

    public function show($id)
    {
        // Retrieve product information from the database or any data source
        $product = Product::find($id);

        // Pass the product data to the view
        return view('singleProduct', ['Product' => $product]);
    }

    public function shop()
    {
        $products = Product::all();
        return view('shop', ['Products' => $products]);
    }

    public function singleProduct($productId)
    {
        // Retrieve the main product information
        $product = Product::find($productId);

        // Retrieve other related products
        $relatedProducts = Product::where('id', '!=', $productId)->limit(3)->get();

        return view('singleProduct', ['product' => $product, 'Products' => $relatedProducts]);
    }

}
