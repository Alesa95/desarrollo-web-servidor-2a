<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BebidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bebidas')->insert([
            [
                'nombre' => 'Coca-cola',
                'precio' => 1.95,
                'tipo' => 'Refresco'
            ],
            [
                'nombre' => 'Fanta Naranja',
                'precio' => 1.95,
                'tipo' => 'Refresco'
            ],
            [
                'nombre' => 'Cerveza Alhambra',
                'precio' => 2.5,
                'tipo' => 'Alcohol'
            ]
        ]);   
    }
}
