<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Este es el seeder principal, Laravel ejecutara todos los seeder que indiquemos cuando ejecutemos el 
     * comando "php artisan db:seed"
     */
    public function run(): void
    {
        $this->call([
            NoticiaSeeder::class,
            CanchcaSeeder::class,
            TarjetaSeeder::class,
            TorneoSeeder::class,
            ArbitroSeeder::class,
            EquipoSeeder::class,
            JugadorSeeder::class,
            PartidoSeeder::class,
            JugadorPartidoSeeder::class
        ]);
    }
}
