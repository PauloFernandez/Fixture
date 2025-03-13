<?php

namespace Database\Seeders;

use App\Models\Arbitro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArbitroSeeder extends Seeder
{
    /**
     * En este seeder usaremos faker para crear datos aleatorios
     */
    public function run(): void
    {
        Arbitro::factory()->count(5)->create();
        
    }
}
