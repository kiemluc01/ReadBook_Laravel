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
        Cookie::queue('user', $user, 1,'/');
        $c = str(Cookie::get('user'));
        echo '<script>
            alert("'.$c.'")
        </script>';
        return True;
    }

}
