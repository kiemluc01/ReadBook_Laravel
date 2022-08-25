<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    public function __construct(Request $request){
        
    }
    public function Login(){
        $user = new  User();
        if($user->Login($_REQUEST['user'],$_REQUEST['pw'])){
            $js = '
                <script>
                    alert("Đăng nhập thành công")
                    location.href = "/Home"
                </script>';
            return $js;
            // return redirect('/Home');
        }    
        $js='<script>
                alert("sai tài khoản hoặc mật khẩu")
                location.href = "/Login"
            </script>';
        return $js;
    }
    public function Register(){
        if($_REQUEST['pw'] == $_REQUEST['cfpw']){
            $user = new  User();
            if($user->Register($_REQUEST['email'],$_REQUEST['user'],$_REQUEST['pw'])){
                $js = '<script>
                        alert("Đăng kí thành công")
                        location.href = "/Login"
                    </script>';
                return $js;  
            }
            $js = '<script>
                    alert("Đăng kí không thành công")
                    location.href = "/Register"
                </script>';
            return $js;
        }
        $js = '<script>
                    alert("Mật khẩu không trùng nhau")
                    location.href = "/Register"
                </script>';
        return $js;
    }
}
