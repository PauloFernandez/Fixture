<?php

namespace Database\Seeders;

use App\Models\Tarjeta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TarjetaSeeder extends Seeder
{
    public function run(): void
    {
        Tarjeta::create([
            'nombre' => 'Amarilla',
            'multa' => '50',
        ]);

        Tarjeta::create([
            'nombre' => 'Roja',
            'multa' => '150',
        ]);
    }
}
