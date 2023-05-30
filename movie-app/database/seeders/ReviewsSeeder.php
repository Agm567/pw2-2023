<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::create([
            'film' => 'Parasite',
            'user' => 'Andi Purnama',
            'rating' => '8.6',
            'tanggal' => '2023-05-10',
        ]);
        Review::create([
            'film' => 'Avanger: End Game',
            'user' => 'Ratna Sari',
            'rating' => '8.4',
            'tanggal' => '2023-05-11',
        ]);
        Review::create([
            'film' => 'The God Father',
            'user' => 'Budi Santoso',
            'rating' => '8.3',
            'tanggal' => '2023-05-12',
        ]);
        Review::create([
            'film' => 'The Dark Knight',
            'user' => 'Siti Aisyah',
            'rating' => '9.0',
            'tanggal' => '2023-05-13',
        ]);
        Review::create([
            'film' => 'Forrest Gump',
            'user' => 'Arief Rahman',
            'rating' => '8.8',
            'tanggal' => '2023-05-14',
        ]);
        Review::create([
            'film' => 'Parasite',
            'user' => 'Indah Wati',
            'rating' => '8.7',
            'tanggal' => '2023-05-15',
        ]);
        Review::create([
            'film' => 'Avangers: End Game',
            'user' => 'Rudi Kurniawan',
            'rating' => '8.9',
            'tanggal' => '2023-05-16',
        ]);
        Review::create([
            'film' => 'The God Father',
            'user' => 'Ahmad Kasim',
            'rating' => '9.0',
            'tanggal' => '2023-05-17',
        ]);
        Review::create([
            'film' => 'The Dark Knight',
            'user' => 'Yoga Prasetyo',
            'rating' => '9.3',
            'tanggal' => '2023-05-18',
        ]);
        Review::create([
            'film' => 'Forrest Gump',
            'user' => 'Maya Susanti',
            'rating' => '9.1',
            'tanggal' => '2023-05-19',
        ]);
    }
}
