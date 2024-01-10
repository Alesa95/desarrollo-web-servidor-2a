<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PlatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('platos')->insert([
            [
                'nombre' => 'Tortilla de patatas',
                'precio' => 4.95,
                'tipo' => 'Ración'
            ],
            [
                'nombre' => 'Chuletillas de cordero',
                'precio' => 9.95,
                'tipo' => 'Ración'
            ],
            [
                'nombre' => 'Ensaladilla rusa',
                'precio' => 3.5,
                'tipo' => 'Tapa'
            ]
        ]);    
    }
}
