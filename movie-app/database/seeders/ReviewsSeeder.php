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
            'review' => 'Film bagus dengan alur cerita yang menarik.',
            'tanggal' => '2023-05-10',
        ]);
        Review::create([
            'film' => 'Avenger: End Game',
            'user' => 'Ratna Sari',
            'rating' => '8.4',
            'review' => 'Puncak epik dari Marvel Cinematic Universe.',
            'tanggal' => '2023-05-11',
        ]);
        Review::create([
            'film' => 'The God Father',
            'user' => 'Budi Santoso',
            'rating' => '8.3',
            'review' => 'Film klasik dengan penampilan yang tak terlupakan.',
            'tanggal' => '2023-05-12',
        ]);
        Review::create([
            'film' => 'The Dark Knight',
            'user' => 'Siti Aisyah',
            'rating' => '9.0',
            'review' => 'Salah satu film pahlawan super terbaik yang pernah ada.',
            'tanggal' => '2023-05-13',
        ]);
        Review::create([
            'film' => 'Forrest Gump',
            'user' => 'Arief Rahman',
            'rating' => '8.8',
            'review' => 'Cerita yang menghangatkan hati dan menginspirasi.',
            'tanggal' => '2023-05-14',
        ]);
        Review::create([
            'film' => 'Parasite',
            'user' => 'Indah Wati',
            'rating' => '8.7',
            'review' => 'Film yang memprovokasi pemikiran dan dijalankan dengan brilian.',
            'tanggal' => '2023-05-15',
        ]);
        Review::create([
            'film' => 'Avenger: End Game',
            'user' => 'Rudi Kurniawan',
            'rating' => '8.9',
            'review' => 'Puncak epik dan memuaskan dari kisah Avengers.',
            'tanggal' => '2023-05-16',
        ]);
        Review::create([
            'film' => 'The God Father',
            'user' => 'Ahmad Kasim',
            'rating' => '9.0',
            'review' => 'Sebuah karya masterpiece dengan cerita yang luar biasa.',
            'tanggal' => '2023-05-17',
        ]);
        Review::create([
            'film' => 'The Dark Knight',
            'user' => 'Yoga Prasetyo',
            'rating' => '9.3',
            'review' => 'Pengalaman sinematik yang seru dan tak terlupakan.',
            'tanggal' => '2023-05-18',
        ]);
        Review::create([
            'film' => 'Forrest Gump',
            'user' => 'Maya Susanti',
            'rating' => '9.1',
            'review' => 'Film yang indah dan menyentuh hati dengan kesan yang abadi.',
            'tanggal' => '2023-05-19',
        ]);
    }
}
