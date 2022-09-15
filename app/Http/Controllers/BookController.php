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
}
