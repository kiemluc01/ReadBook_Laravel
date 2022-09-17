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

    //check book in cat
    public function check($cat){
        $book = DB::table('tblsach')->where('idDanhmuc','=',$cat)->get();
        if($book != NULL)
            return True;
        return False;
    }

    //get cur book
    public function CurrentBook($idBook){
        $book = DB::table('tblsach')->join('chitietsach','tblsach.idSach','=','chitietsach.idSach')->join('tblfavorite','tblsach.idSach','=','tblfavorite.idSach')->join('tbldanhgia','tblsach.idSach','=','tbldanhgia.idSach')->where('tblsach.idSach',$idBook)->orderBy('idDanhgia','desc')->get();
        return $book;
    }

    //get books relate
    public function BookRelate($idCat,$idBook){
        $book = DB::table('tblsach')->join('chitietsach','tblsach.idSach','=','chitietsach.idSach')->where('idDanhmuc','=',$idCat)->where('tblsach.idSach','!=',$idBook)->get();
        return $book;
    }

    //delete cmt
    public function delcmt($id){
        if(DB::delete('delete from tbldanhgia where idDanhgia = ?',[$id]))
            return True;
        return False;
    }

    //cmt
    public function Rate($idB,$idm,$nd){
        if(DB::table('tbldanhgia')->insert(['idMember' => $idm, 'idSach' => $idB, 'Noidung' => $nd]))
            return True;
        return False;
    }
}
