<?php

namespace App\Http\Controllers\Web\Genre;

use App\Http\Controllers\Controller;
use App\Http\Requests\GenreRequest;
use App\Models\Genre;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(GenreRequest $request, Genre $genre){
        $data = $request->validated();
        $genre->update($data);
        return redirect()->route('genres.index');
    }
}
