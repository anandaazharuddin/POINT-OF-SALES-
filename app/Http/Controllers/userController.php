<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
 public function index ($id, $name){
        return 'ID: '.$id.' name: '.$name;
}   }
