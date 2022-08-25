<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct(){

    }
    public function Login(){
        echo '1';
        if(isset($_REQUEST['user']) && isset($_REQUEST['pw'])){
            $user = new User();
            if($user->Login($_REQUEST['user'],$_REQUEST['pw']))
                return redirect('/Home');
            echo '
                <script>
                    alert("sai tk hoặc mk")
                </script>
            ';
            return redirect('/Login');
        }
    }
}
