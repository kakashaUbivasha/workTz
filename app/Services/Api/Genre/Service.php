<?php

namespace App\Services\Api\Genre;

use App\Models\Genre;

class Service
{
    public function getGenres(){
        $genres = Genre::all();
        return $genres;
    }
    public function getGenreBooks($id, $request){
        $perPage = $request->query('per_page', 10);
        $genre = Genre::findOrFail($id);
        $books = $genre->books()->paginate($perPage);
        return $books;
    }
}
