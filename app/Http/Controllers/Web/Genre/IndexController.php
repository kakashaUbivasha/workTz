<?php

namespace App\Http\Controllers\Web\Genre;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class IndexController extends MainController
{
    public function __invoke(){
        $genres = Genre::all();
        return view('genre.index', compact('genres'));
    }
}
