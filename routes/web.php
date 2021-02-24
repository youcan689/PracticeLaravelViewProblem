<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return view('welcome');
});
Route::get("/about.html",function(){
	return "hi";
});

Route::get('user/{name?}', function ($name = null) {
    return $name;
});

Route::get('user/{name?}', function ($name = 'John') {
    return $name;
});


//cats/2
//網址後要帶參數        後面也有個參數通常是同名  影片講解不錯

Route::get("/cats/{id}", function($x){
     return "我是第".$x."號的貓";
});