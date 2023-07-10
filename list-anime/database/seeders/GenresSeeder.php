<?php

namespace Database\Seeders;

use App\Models\Genres;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genres::create([
            'id' => 1,
            'name' => 'Action',
            'description' => 'Genre yang menampilkan aksi dan pertempuran yang intens.'
        ]);
        Genres::create([
            'id' => 2,
            'name' => 'Adventure',
            'description' => 'Genre yang menampilkan petualangan dan eksplorasi.'
        ]);
        Genres::create([
            'id' => 3,
            'name' => 'Fantasy',
            'description' => 'Genre yang menampilkan unsur-unsur magis dan dunia fiksi.'
        ]);
        Genres::create([
            'id' => 4,
            'name' => 'Mystery',
            'description' => 'Genre yang menampilkan misteri dan teka-teki yang harus dipecahkan.'
        ]);
    }
}
