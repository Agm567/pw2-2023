<?php

namespace Database\Seeders;

use App\Models\Countries;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Countries::create([
                'id' => 1,
                'name' => 'Japan'
            ]);
            Countries::create([
                'id' => 2,
                'name' => 'United States'
            ]);
            Countries::create([
                'id' => 3,
                'name' => 'South Korea'
            ]);
            Countries::create([
                'id' => 4,
                'name' => 'China'
            ]);
            Countries::create([
                'id' => 5,
                'name' => 'United Kingdom'
            ]);
            Countries::create([
                'id' => 6,
                'name' => 'Australia'
            ]);
            Countries::create([
                'id' => 7,
                'name' => 'France'
            ]);
            Countries::create([
                'id' => 8,
                'name' => 'Germany'
            ]);
            Countries::create([
                'id' => 9,
                'name' => 'Italy'
            ]);

    }
}
