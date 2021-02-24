<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //

    function about(){
        $a=2;
        echo "內部變數:\$a = ".$a;
        return"hi";
      }
      
      
      
}

