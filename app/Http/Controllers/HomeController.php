<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {   $products = Product::inRandomOrder()->take(8)->get();
        //dd($products);
        return view('home',[
            'products' =>$products
        ]);
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
    public function checkout()
    {
        return view('checkout');
    }
    public function success()
    {
        return view('success');
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
