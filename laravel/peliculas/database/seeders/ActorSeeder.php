<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('actors')->insert([
            [
                'first_name' => 'Christian',
                'last_name' => 'Bale',
                'date_of_birth' => '1985-01-07'
            ],
            [
                'first_name' => 'Joaquin',
                'last_name' => 'Phoenix',
                'date_of_birth' => '1983-11-12'
            ],
            [
                'first_name' => 'Heath', 
                'last_name' => 'Ledger',
                'date_of_birth' => '1977-09-05'
            ]
        ]);
    }
}
