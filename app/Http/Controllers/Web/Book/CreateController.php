<?php

namespace App\Http\Controllers\Web\Book;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class CreateController extends MainController
{
    public function __invoke(){
        $genres = Genre::all();
        return view('book.create', compact('genres'));
    }
}
