<?php

namespace App\Http\Controllers\Web\Genre;

use App\Http\Controllers\Controller;
use App\Http\Requests\GenreRequest;
use App\Models\Genre;
use Illuminate\Http\Request;

class StoreController extends MainController
{
    public function __invoke(GenreRequest $request){
    $data = $request->validated();
    Genre::create($data);
    return redirect()->route('genres.index');
    }
}
