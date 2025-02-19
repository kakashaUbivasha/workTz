<?php

namespace App\Http\Controllers\Web\Genre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(){
        return view('genre.create');
    }
}
