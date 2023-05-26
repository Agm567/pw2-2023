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
        Genre::create([
            'nama' => 'Drama',
            'deskripsi' => 'Film dengan kisah emosional dan konflik pribadi',
        ]); 
        Genre::create([
            'nama' => 'Romance',
            'deskripsi' => 'Film dengan kisah cinta dan hubungan romantis',
        ]); 
        Genre::create([
            'nama' => 'Thriller',
            'deskripsi' => 'Film dengan ketegangan dan suspense yang tinggi',
        ]); 
        Genre::create([
            'nama' => 'Horror',
            'deskripsi' => 'Film dengan elemen horor dan ketakutan',
        ]); 
        Genre::create([
            'nama' => 'Sci-Fi',
            'deskripsi' => 'Film dengan elemen fiksi ilmiah dan teknologi canggih',
        ]); 
        Genre::create([
            'nama' => 'Adventure',
            'deskripsi' => 'Film dengan petualangan dan eksplorasi',
        ]); 
        Genre::create([
            'nama' => 'Fantasy',
            'deskripsi' => 'Film dengan unsur dunia fantasi dan makhluk ajaib',
        ]); 
        Genre::create([
            'nama' => 'Crime',
            'deskripsi' => 'Film dengan cerita kejahatan dan penyelidikan',
        ]);
        Genre::create([
            'nama' => 'Mystery',
            'deskripsi' => 'Film dengan teka-teki dan misteri yang harus dipecahkan',
        ]);
        Genre::create([
            'nama' => 'Animation',
            'deskripsi' => 'Film dengan animasi dan karakter fiktif',
        ]);
        Genre::create([
            'nama' => 'Family',
            'deskripsi' => 'Film yang cocok untuk ditonton bersama keluarga',
        ]);
        Genre::create([
            'nama' => 'Historical',
            'deskripsi' => 'Film dengan latar belakang sejarah dan peristiwa bersejarah',
        ]);
        Genre::create([
            'nama' => 'War',
            'deskripsi' => 'Film dengan tema perang dan konflik militer',
        ]);
        Genre::create([
            'nama' => 'Romantic Comedy',
            'deskripsi' => 'Film dengan kombinasi kisah romantis dan komedi',
        ]);
        Genre::create([
            'nama' => 'Sci-Fi Thriller',
            'deskripsi' => 'Film dengan gabungan elemen fiksi ilmiah dan ketegangan',
        ]);
        Genre::create([
            'nama' => 'Adventure Fantasy',
            'deskripsi' => 'Film dengan perpaduan petualangan dan dunia fantasi',
        ]);
        Genre::create([
            'nama' => 'Drama Crime',
            'deskripsi' => 'Film dengan kombinasi cerita dramatis dan kejahatan',
        ]);
        Genre::create([
            'nama' => 'Action Comedy',
            'deskripsi' => 'Film dengan aksi dan unsur komedi',
        ]);

    }
}
