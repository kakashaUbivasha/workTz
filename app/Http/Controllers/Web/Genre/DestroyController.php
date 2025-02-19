<?php

namespace App\Http\Controllers\Web\Genre;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class DestroyController extends MainController
{
    public function __invoke(Genre $genre){
        $genre->delete();
        return redirect()->route('genres.index');
    }
}
