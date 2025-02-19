<?php

namespace App\Services\Web\Book;

use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function store($request, $data){
        if ($request->hasFile('cover')) {
            $data['cover'] = $request->file('cover')->store('covers', 'public');
        }

        $book = Book::create($data);
        $book->genres()->attach($data['genres']);
    }
    public function update($data, $book, $request){
        $genres = $data['genres']?? [];
        unset($data['genres']);
        if ($request->hasFile('cover')) {
            if ($book->cover) {
                Storage::delete('public/' . $book->cover);
            }
            $data['cover'] = $request->file('cover')->store('covers', 'public');
        }
        $book->update($data);
        $book->genres()->sync($genres);
    }
    public function updateStatus($book){
        $book->update(['status' => 1]);
    }
}
