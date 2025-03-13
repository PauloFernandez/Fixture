<?php

namespace Database\Factories;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jugador>
 */
class JugadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //Variables para usar fake de laravel
        $fullPath = public_path('storage/images/'); // Directorio donde se guardarán las imágenes
        //Usamos esta forma para que guarde las imagenes creadas en la carpeta storage de nuestra app

        return [
            'file_uri' => fake()->image($fullPath, 200, 150, null, null),
            'nombre' => fake()->firstName(),
            'apellido' => fake()->lastName(),
            'fecha_nac' => fake()->dateTimeInInterval('-40 years', '+20 years'),
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => fake()->randomElement(['POT', 'LI', 'LD', 'DEF', 'MCD', 'MI', 'ME', 'DEL']),
            'num_camiseta' => fake()->numberBetween(1, 25),
            'equipo_id' => Equipo::inRandomOrder()->first()->id,
        ];
    }
}
