<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert([
            [
                'title' => 'El caballero oscuro',
                'duration' => 160,
                'age_rating' => 16
            ],
            [
                'title' => 'Los Rugrats',
                'duration' => 100,
                'age_rating' => 3
            ]
        ]);
    }
}
