<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ActorFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('actor_film')->insert([
            [
                'actor_id' => 1,
                'film_id' => 1
            ],
            [
                'actor_id' => 2,
                'film_id' => 1
            ],
            [
                'actor_id' => 3,
                'film_id' => 1
            ]
        ]);
    }
}
