<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\PseudoTypes\False_;

class Book extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'id',
        'fullname',
        'DoB',
        'username',
        'email',
        'password',
    ];

    //get all categories
    public function getCat(){
        $cat = DB::table('tbldanhmuc')->get();
        return $cat;
    }

    //get book in category
    public function getBook($cat){
        $book = DB::table('tblsach')->join('chitietsach','tblsach.idSach','=','chitietsach.idSach')->where('idDanhmuc','=',$cat)->get();
        return $book;
    }

    public function check($cat){
        $book = DB::table('tblsach')->where('idDanhmuc','=',$cat)->get();
        if($book != NULL)
            return True;
        return False;
    }
}
