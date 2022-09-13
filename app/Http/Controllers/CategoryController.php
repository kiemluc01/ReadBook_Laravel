<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    //
    public function __construct()
    {
        
    }

    //get all cat
    public function getAll(){
        $cat = DB::table('tbldanhmuc')->get();
        return $cat;
    }
}
