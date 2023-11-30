<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {

        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function login()
    {
        return view('login');
    }

    public function cart()
    {
        return view('cart');
    }

    public function register()
    {
        return view('register');
    }
    public function news()
    {
        return view('news');
    }
    public function singleNews()
    {
        return view('singleNews');
    }
<<<<<<< HEAD
   // public function shop()
   // {
   //     return view('shop');
   // }
=======
    public function shop()
    {
        $products = Product::all();
        return view('shop', ['products'=>$products]);
    }
>>>>>>> bfd38eeea2868ad41ab3097a8c6b204cce4a9213
    public function checkout()
    {
        return view('checkout');
    }
    public function welcome()
    {
        return view('welcome');
    }

    public function adminhome()
    {
        // Logic for admin dashboard
        return view('adminhome');
    }

    public function shop()
    {
        // Retrieve products from the database or any other source
        $products = Product::all(); // Assuming you have a Product model

        // Pass the $products variable to the view
        return view('shop', ['products' => $products]);
    }

    public function singleProduct()
    {
        // Logic for admin dashboard
        return view('singleProduct');
    }
    
    
}
