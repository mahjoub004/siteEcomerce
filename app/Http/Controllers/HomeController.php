<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function shop()
    {
        return view('shop');
    }

    public function cart()
    {
        return view('cart');
    }

    public function product()
    {
        return view('product');
    }
    
    public function orders()
    {
        return view('orders');
    }

   
}
