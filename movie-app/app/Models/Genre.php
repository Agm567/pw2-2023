<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'no' => 1,
            'nama genre' => 'Action',
            'deskripsi' => 'Film dengan aksi dan pertarungan yang seru',
        ], 
        [
            'no' => 2,
            'nama genre' => 'Comedy',
            'deskripsi' => 'Film dengan humor dan situasi lucu',
        ], 
        [
            'no' => 3,
            'nama genre' => 'Drama',
            'deskripsi' => 'Film dengan kisah emosional dan konflik pribadi',
        ], 
        [
            'no' => 4,
            'nama genre' => 'Romance',
            'deskripsi' => 'Film dengan kisah cinta dan hubungan romantis',
        ], 
        [
            'no' => 5,
            'nama genre' => 'Thriller',
            'deskripsi' => 'Film dengan ketegangan dan suspense yang tinggi',
        ], 
        [
            'no' => 6,
            'nama genre' => 'Horror',
            'deskripsi' => 'Film dengan elemen horor dan ketakutan',
        ], 
        [
            'no' => 7,
            'nama genre' => 'Sci-Fi',
            'deskripsi' => 'Film dengan elemen fiksi ilmiah dan teknologi canggih',
        ], 
        [
            'no' => 8,
            'nama genre' => 'Adventure',
            'deskripsi' => 'Film dengan petualangan dan eksplorasi',
        ], 
        [
            'no' => 9,
            'nama genre' => 'Fantasy',
            'deskripsi' => 'Film dengan unsur dunia fantasi dan makhluk ajaib',
        ], 
        [
            'no' => 10,
            'nama genre' => 'Crime',
            'deskripsi' => 'Film dengan cerita kejahatan dan penyelidikan',
        ], 
        [
            'no' => 11,
            'nama genre' => 'Mystery',
            'deskripsi' => 'Film dengan teka-teki dan misteri yang harus dipecahkan',
        ], 
        [
            'no' => 12,
            'nama genre' => 'Animation',
            'deskripsi' => 'Film dengan animasi dan karakter fiktif',
        ], 
        [
            'no' => 13,
            'nama genre' => 'Family',
            'deskripsi' => 'Film yang cocok untuk ditonton bersama keluarga',
        ], 
        [
            'no' => 14,
            'nama genre' => 'Historical',
            'deskripsi' => 'Film dengan latar belakang sejarah dan peristiwa bersejarah',
        ], 
        [
            'no' => 15,
            'nama genre' => 'War',
            'deskripsi' => 'Film dengan tema perang dan konflik militer',
        ], 
        [
            'no' => 16,
            'nama genre' => 'Romantic Comedy',
            'deskripsi' => 'Film dengan kombinasi kisah romantis dan komedi',
        ], 
        [
            'no' => 17,
            'nama genre' => 'Sci-Fi Thriller',
            'deskripsi' => 'Film dengan gabungan elemen fiksi ilmiah dan ketegangan',
        ], 
        [
            'no' => 18,
            'nama genre' => 'Adventure Fantasy',
            'deskripsi' => 'Film dengan perpaduan petualangan dan dunia fantasi',
        ], 
        [
            'no' => 19,
            'nama genre' => 'Drama Crime',
            'deskripsi' => 'Film dengan kombinasi cerita dramatis dan kejahatan',
        ], 
        [
            'no' => 20,
            'nama genre' => 'Action Comedy',
            'deskripsi' => 'Film dengan aksi dan unsur komedi',
        ], 
];

    public function getAllGenres()
    {
        return $this->genres;
    }
    
}
