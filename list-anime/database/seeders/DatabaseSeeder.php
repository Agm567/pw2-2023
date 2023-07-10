<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersSeeder::class,
            CountriesSeeder::class,
            GenresSeeder::class,
            MoviesSeeder::class,
            ReviewsSeeder::class,
        ]);
    }
}
