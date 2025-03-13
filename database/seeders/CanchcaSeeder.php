<?php

namespace Database\Seeders;

use App\Models\Cancha;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CanchcaSeeder extends Seeder
{
    public function run(): void
    {
        Cancha::create([
            'nombre' => 'Cancha 1',
            'valor_hora' => '1500.00'
        ]);

        Cancha::create([
            'nombre' => 'Cancha 2',
            'valor_hora' => '1500.00'
        ]);

        Cancha::create([
            'nombre' => 'Cancha 3',
            'valor_hora' => '1500.00'
        ]);
    }
}
