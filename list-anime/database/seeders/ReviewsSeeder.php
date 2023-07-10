<?php

namespace Database\Seeders;

use App\Models\Reviews;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reviews::create([
            'movies_id' => 1,
            'users_id' => 2,
            'date' => '2023-06-20',
            'description' => 'This movie was fantastic! The acting, the storyline, and the visuals were all top-notch. Highly recommend it!',
            'rating' => 9.5,
        ]);

        Reviews::create([
            'movies_id' => 2,
            'users_id' => 2,
            'date' => '2023-06-21',
            'description' => 'I found this movie to be very engaging and thought-provoking. The performances were excellent, and the plot kept me on the edge of my seat.',
            'rating' => 8.8,
        ]);
    }
}
