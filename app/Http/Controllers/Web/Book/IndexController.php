<?php

namespace App\Http\Controllers\Web\Book;

use App\Models\Book;
use Illuminate\Http\Request;

class IndexController extends MainController
{
    public function __invoke(){
        $books = Book::paginate(21);
        return view('book.index', compact('books'));
    }
}
