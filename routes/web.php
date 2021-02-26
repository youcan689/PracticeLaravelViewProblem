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

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return view('welcome');
});
// Route::get("/about.html",function(){
// 	return "hi";
// });

Route::get('user/{name?}', function ($name = null) {
    return $name;
});

Route::get('user/{name?}', function ($name = 'John') {
    return $name;
});


//cats/2
//網址後要帶參數        後面也有個參數通常是同名  影片講解不錯

//練習一個變數
// Route::get("/cats/{id}", function($x){
//      return "我是第".$x."號的貓";
// });
////Route可以有一個以上參數
Route::get("/cats/{id}/{name}", function($x,$name){
    return "我是第".$x."號的貓:".$name;
});

//  右邊是顯示錯誤 影片中教的 可能看官方文件 Route::get('/about', action:'WelcomeController@about');
// route::get('/about',[app\Http\Controllers\WelcomeController::class,'about']);

route::get('/about','WelcomeController@about');

route::resource('/photos',WelcomeController::class);
