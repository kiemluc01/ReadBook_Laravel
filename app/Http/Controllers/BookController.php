<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

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
        $book = new Book();
        if($book->delcmt($_REQUEST['idcmt']))
            return redirect('/Book?id='.$_REQUEST['idB'].'#cmt');
    }

    public function rate(){
        $book = new Book();
        if($book->Rate($_REQUEST['id'],$_REQUEST['idm'],$_REQUEST['rateText']))
            return redirect('/Book?id='.$_REQUEST['id'].'#cmt');
        return redirect(url()->current());
    }
}
