<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\Controller;

class CookieController extends Controller
{
    //
    public function __construct(){

    }
    public static function setUser($user){
        Cookie::queue('user', $user, 15,'/');
        return True;
    }
    public static function set($name,$value){
        Cookie::queue($name, $value);
        return True;
    }
    public function deleteUser(){
        Cookie::queue('user', '', -1);
        Cookie::queue('url','',-1);
        return redirect('/Login');
    }
    public static function delete($name){
        Cookie::queue($name, '', -1);
    }
    public function check($cookieName){
        if(Cookie::get($cookieName) !== NULL)
            return True;
        return False;
    }
    public static function get($cookieName){
        return Cookie::get($cookieName);
    }
}
