<?php

namespace App\Http\Controllers;

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
    public function shop()
    {
        return view('shop');
    }
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


}
