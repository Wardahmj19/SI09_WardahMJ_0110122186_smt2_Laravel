<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index(){
        return view('praktikum10/index');
    }

    public function detail(){
        return view('praktikum10/detail');
    }

    public function about(){
        return view('praktikum10/about');
    }
}
