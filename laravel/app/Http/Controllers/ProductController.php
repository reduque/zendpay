<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function category(){
        return view('category');
    }
    public function test(){
        return view('test');
    }

}