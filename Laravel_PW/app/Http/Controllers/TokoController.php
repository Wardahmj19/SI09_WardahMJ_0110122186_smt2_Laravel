<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customers;

class TokoController extends Controller
{
    public function index(){
        return view('praktikum10-11/index');
    }

    public function detail(){
        return view('praktikum10-11/detail');
    }

    public function about(){
        return view('praktikum10-11/about');
    }

    public function admin(){
        $products = Product::all();
        return view('praktikum10-11/admin', compact('products'));
    }

    public function customers(){
        $customers = Customers::all();
        return view('praktikum10-11/customers', compact('customers'));
    }
}
