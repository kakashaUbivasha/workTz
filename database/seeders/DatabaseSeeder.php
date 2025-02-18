<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $genres = Genre::factory(10)->create();
        $books = Book::factory(100)->create();
        foreach ($books as $book) {
            $genresId = $genres->pluck('id')->toArray();
            $book->genres()->attach($genresId);
        }
    }
}
