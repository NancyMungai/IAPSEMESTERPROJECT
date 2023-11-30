<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

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
   // public function shop()
   // {
   //     return view('shop');
   // }
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
