<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        Movie::create([
            'judul' => 'The Godfather',
            'poster' => 'image.png',
            'genre_id' => 3,
            'negara' => 'USA',
            'tahun' => '1972',
            'rating' => '8.0',
        ]);

        Movie::create([
            'judul' => 'The Shawshank Redemption',
            'poster' => 'image.png',
            'genre_id' => '1',
            'negara' => 'USA',
            'tahun' => 1994,
            'rating' => 9.8,
        ]);
    }
}
