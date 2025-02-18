<?php

namespace App\Http\Controllers\Api\Genre;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;


class GenreController extends Controller
{
    public function index(){
        $genres = Genre::all();
        return response()->json($genres);
    }
    public function show($id, Request $request){
        $perPage = $request->query('per_page', 10);
        $genre = Genre::findOrFail($id);
        $books = $genre->books()->paginate($perPage);
        return response()->json($books);
    }
}
