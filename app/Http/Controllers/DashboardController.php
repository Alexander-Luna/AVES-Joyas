<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function viewProduct()
    {
        return view('product.index');
    }
    public function viewCheckout()
    {
        return view('checkout.index');
    }
}
