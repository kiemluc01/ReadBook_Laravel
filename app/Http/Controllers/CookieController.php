<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\Controller;

class CookieController extends Controller
{
    //
    public function __construct(){

    }
    public function setUser($user){
        Cookie::queue('user', $user, 15,'/');
        return True;
    }
    public function deleteUser(){
        Cookie::queue('user', '', -1);
        return redirect('/Login');
    }
}
