<?php

namespace App\Http\Controllers\Api\Genre;



use App\Http\Resources\Genre\GenreResource;
use App\Models\Genre;

class IndexController extends MainController
{
    public function __invoke(){
        $genres = $this->service->getGenres();
        return GenreResource::collection($genres);
    }
}
