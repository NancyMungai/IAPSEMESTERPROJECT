<?php
#app\Http\Controllers\ProductController.php

namespace App\Http\Controllers;
<<<<<<< HEAD
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
=======
>>>>>>> 911033a5e6f3f24b163bea9a823017905d5c8034

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
<<<<<<< HEAD
=======
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

<<<<<<< HEAD
public function index()
{
      $data = Product::all();
    return view('product', ['products'=>$data]);
}
=======
    public function detail($productname)
    {
        $data = Product::where('product_name', $productname)->first();
        return view('detail', ['product' => $data]);
    }
>>>>>>> 911033a5e6f3f24b163bea9a823017905d5c8034

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

>>>>>>> bfd38eeea2868ad41ab3097a8c6b204cce4a9213
    public function shop()
    {
        $products = Product::all();
        return view('shop', compact('products')); //->with('i', (request()->input('page', 1) - 1) * 5);
        
    }
   public function cart()
    {
        return view('cart');
    }

    
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "product_name" => $product->product_name,
                "product_image" => $product->product_image,
                "product_price" => $product->product_price,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    public function update(Request $request)
    {
if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
}
            session()->flash('success', 'Product successfully removed!');
        }
    }

}
<<<<<<< HEAD

function addToCart(Request  $req){
    if($req->session()->has('user'))
    {
        $cart = new Cart;
        $cart->user_id=$req->session()->get('user')['id'];
        $cart->product_id=$req->product_id;
        $cart->save();
        return redirect('/');
    }
    else{
        return redirect('/login');
    }
}
}
=======
>>>>>>> 911033a5e6f3f24b163bea9a823017905d5c8034
