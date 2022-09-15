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
    public function getAll(){
        $book = DB::table('tblsach')->get();
        return $book;
    }
    //get book in category
    public function getBookCat($IDcat){
        $book = new Book();
        $books = $book->getBook($IDcat);
        return $books;
    }
}
