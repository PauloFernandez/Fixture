<?php

namespace Database\Seeders;

use App\Models\JugadorPartido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JugadorPartidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JugadorPartido::factory()->count(30)->create();
    }
}
