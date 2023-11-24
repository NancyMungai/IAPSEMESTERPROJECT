<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index()
    {
        $usertype=Auth()->user()->usertype;

        if($usertype=='user')
        {
            return view('welcome');
        }

        else if($usertype=='admin')
        {
            return view('admin.adminhome'); 
        }
        else
        {
            return redirect()->back();
        }
    }

    public function adminhome()
    {
        // Logic for admin dashboard
        return view('adminhome');
    }

}
