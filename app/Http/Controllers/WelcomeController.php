<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //

    function about(){
        return view(view:"about");
      }
      
      
      
}

