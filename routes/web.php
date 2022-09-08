<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CookieController;
use Illuminate\Support\Facades\Cookie;
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
// Trang chủ chưa login
Route::get('/', function () {
    // return view('template.main-layout');
    return view('non-static-layout.HomePage-NLG');
});

// Trang chủ đã login
Route::get('/Home', function () {
    return view('non-static-layout.HomePage-LG',['user' => Cookie::get('user')]);
});
//read book
Route::prefix('/Book')->group(function () {
    Route::get('/',function(){
        return view('non-static-layout.detailBook',['user' => Cookie::get('user')]);
    });
    Route::get('/Read', function () {
        if(isset($_REQUEST['id']))
        $id = $_REQUEST['id'];
        return view('non-static-layout.Read',['user' => Cookie::get('user'),'idBook' => $id]);
    });
});
//url login
Route::get('/Login', function () {
    return view('non-static-layout.Login');
});
//url register
Route::get('/Register', function () {
    return view('non-static-layout.Register');
});
// run user request
Route::controller(UserController::class)->group(function(){
    Route::post('/Login','Login');
    Route::post('/Register','Register');
});
//run Cookie request
Route::controller(CookieController::class)->group(function(){
    Route::get('/Logout','deleteUser');
    Route::get('/SetCookieUser','setUser');
});
//run Readbook request
