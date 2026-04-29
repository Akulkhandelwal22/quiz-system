<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    function welcome (){
        return view('welcome');
    }
}
