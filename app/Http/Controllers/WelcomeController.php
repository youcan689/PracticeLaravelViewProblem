<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function about(){
        //預期要看到下方view，但是下方有顯示錯誤，看了官方文件後官方文件view標籤內寫的是有帶參數，但是我這個view沒有要帶參數
        return view('about');
    }
}

