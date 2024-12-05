<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() 
    {
        $fruits = array("Apple","Mango","Banana","Pineapple");
        return view('welcome',compact('fruits'));// ["fruits =>$fruits"];
    }
}
