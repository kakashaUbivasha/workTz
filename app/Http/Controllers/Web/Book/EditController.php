<?php

namespace App\Http\Controllers\Web\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class EditController extends MainController
{
    public function __invoke(Book $book){
        $genres = Genre::all();
        return view('book.edit', compact('book', 'genres'));
    }
}
