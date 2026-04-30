<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class Usercontroller extends Controller
{
    function welcome (){
        $Category=Category::get();
        return view('welcome');
    }
}
