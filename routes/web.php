<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\BookController;
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
    $cookie = new CookieController();
    if(!$cookie->check('user'))
        return view('non-static-layout.HomePage');
    return view('non-static-layout.HomePage',['user' => Cookie::get('user')]);
});

// Trang chủ đã login

//read book
Route::get('/Book',function(){
    return view('non-static-layout.detailBook',['user' => Cookie::get('user')]);
});
Route::get('/Read', function () {
    if(!is_null(Cookie::get('user')))
        return view('non-static-layout.Read',['user' => Cookie::get('user')]);
    echo '<script>
        alert("xin mời đăng nhập để tiếp tục")
    </script>';
    return view('non-static-layout.Login');
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
//run book request
Route::controller(BookController::class)->group(function(){
    Route::get('/delCmt','delcmt');
    Route::post('/Rate','rate');
    Route::get('/Rate','rate');
    Route::post('/Reply','reply');
    Route::get('/Reply','reply');
    Route::get('/delRep','delRep');
});
