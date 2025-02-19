<?php

namespace App\Http\Controllers\Web\Genre;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Genre $genre){
        return view('genre.edit', compact('genre'));
    }
}
