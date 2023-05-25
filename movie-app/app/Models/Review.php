<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;

    protected $reviews = [
    [
        'no' => 1,
        'film' => 'Parasite',
        'user' => 'Andi Purnama',
        'rating' => 8.6,
        'tanggal' => '2023-05-10',
    ],
    [
        'no' => 2,
        'film' => 'Avangers: End Game',
        'user' => 'Ratna Sari',
        'rating' => 8.4,
        'tanggal' => '2023-05-11',
    ],
    [
        'no' => 3,
        'film' => 'The GodFather',
        'user' => 'Budi Santoso',
        'rating' => 8.3,
        'tanggal' => '2023-05-12',
    ],
    [
        'no' => 4,
        'film' => 'The Dark Knight',
        'user' => 'Siti Aisyah',
        'rating' => 9.0,
        'tanggal' => '2023-05-13',
    ],
    [
        'no' => 5,
        'film' => 'Forrest Gump',
        'user' => 'Arief Rahman',
        'rating' => 8.8,
        'tanggal' => '2023-05-14',
    ],
    [
        'no' => 6,
        'film' => 'Parasite',
        'user' => 'Indah Wati',
        'rating' => 8.7,
        'tanggal' => '2023-05-15',
    ],
    [
        'no' => 7,
        'film' => 'Avanger: End Game',
        'user' => 'Rudi Kurniawan',
        'rating' => 8.9,
        'tanggal' => '2023-05-16',
    ],
    [
        'no' => 8,
        'film' => 'The God Father',
        'user' => 'Mira Putri',
        'rating' => 9.0,
        'tanggal' => '2023-05-17',
    ],
    [
        'no' => 9,
        'film' => 'The Dark Knight',
        'user' => 'Yoga Prasetyo',
        'rating' => 9.3,
        'tanggal' => '2023-05-18',
    ],
    [
        'no' => 10,
        'film' => 'Forrest Gump',
        'user' => 'Maya Susanti',
        'rating' => 9.1,
        'tanggal' => '2023-05-19',
    ],
];

     public function getAllReviews()
    {
        return $this->reviews;
    }
}
