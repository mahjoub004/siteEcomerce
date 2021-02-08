<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkoutController extends Controller
{   //Gérer le paiement 
    public function checkout()
    {
        return view ('checkout');
    }
    //En cas de paiement réussi
    public function success()
    {
        return view ('success');
    }
}
