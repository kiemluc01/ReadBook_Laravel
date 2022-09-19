<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Http\Controllers\CookieController;

class BookController extends Controller
{
    //
    public function __construct(){

    }
    //get all the book
    public static function getCat(){
        $book = new Book();
        $cat = $book->getCat();
        return $cat;
    }
    //get book in category
    public static function getBookCat($IDcat){
        $book = new Book();
        $books = $book->getBook($IDcat);
        return $books;
    }

    //check book in cat
    public static function check($cat){
        $book = new Book();
        return $book->check($cat);
    }

    //get cur book
    public static function CurrentBook($idBook){
        $book = new Book();
        return $book->CurrentBook($idBook);
    }
    //get cmt book
    public static function getCmt($idBook){
        $book = new Book();
        return $book->CmtBook($idBook);
    }

    //get book relate
    public static function BookRelate($IDcat,$idBook){
        $book = new Book();
        $books = $book->BookRelate($IDcat,$idBook);
        return $books;
    }

    //del cmt
    public function delcmt(){
        $cookie = new CookieController();
        if($cookie->check('user')){
            $book = new Book();
            if($book->delcmt($_REQUEST['idcmt']))
                return redirect('/Book?id='.$_REQUEST['idB'].'#cmt');
        }
        $js = '<script>
            alert("xin mời đăng nhập trước")
            location.href = "/Login"
        </script>';
        return $js;
    }

    //del rep
    public function delRep(){
        $cookie = new CookieController();
        if($cookie->check('user')){
            $book = new Book();
            if($book->delRep($_REQUEST['idrep']))
                return redirect('/Book?id='.$_REQUEST['idB'].'#cmt');
        }
        $js = '<script>
            alert("xin mời đăng nhập trước")
            location.href = "/Login"
        </script>';
        return $js;
        
    }

    public function rate(){
        $cookie = new CookieController();
        if($cookie->check('user')){
            $book = new Book();
            if($book->Rate($_REQUEST['id'],$_REQUEST['idm'],$_REQUEST['rateText']))
                return redirect('/Book?id='.$_REQUEST['id'].'#cmt');
            return redirect(url()->current());
        }
        $js = '<script>
            alert("xin mời đăng nhập trước")
            location.href = "/Login"
        </script>';
        return $js;
    }
    //reply cmt
    public function reply(){
        $cookie = new CookieController();
        if($cookie->check('user')){
            $book = new Book();
            if($book->reply($_REQUEST['idrate'],$_REQUEST['idm'],$_REQUEST['repText']))
                return redirect('/Book?id='.$_REQUEST['idB'].'#cmt');
        }
        $js = '<script>
            alert("xin mời đăng nhập trước")
            location.href = "/Login"
        </script>';
        return $js;
        
    }

    //get reply
    public static function getRep($idRate){
        $book = new Book();
        return $book->getRep($idRate);
    }

    //view up
    public static function viewUp($view){
        $book = new Book();
        $book->viewUp($_REQUEST['id'],$view);
    }
}
