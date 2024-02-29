<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodbeverage() {
        return view('product.foodbeverage');

    }
    public function beautyhealth () {
        return view('product.beautyhealth');

    }
    public function homecare () {
        return view('product.homecare');

    }
    public function babykid () {
        return view('product.babykid');

    }
}
