<?php

namespace App\Http\Controllers\Web\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class ShowController extends MainController
{
    public function __invoke(Book $book){
        return view('book.show', compact('book'));
    }
}
