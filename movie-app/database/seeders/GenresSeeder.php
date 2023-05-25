<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'nama' => 'Action',
            'deskripsi' => 'Action-packed movies',
        ]); 

        Genre::create([
            'nama' => 'Comedy',
            'deskripsi' => 'Film dengan humor dan situasi lucu',
        ]);

        Genre::create([
            'nama' => 'Horror',
            'deskripsi' => 'Film dengan elemen horor dan ketakutan',
        ]);

    }
}
