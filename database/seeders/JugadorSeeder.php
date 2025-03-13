<?php

namespace Database\Seeders;

use App\Models\Jugador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JugadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//La Liga
        Jugador::create([
            'file_uri' => 'Marc-Andre_ter-stegen.png',
            'nombre' => 'Marc-André',
            'apellido' => 'ter Stegen',
            'fecha_nac' => '1992-4-30',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 1, //'FC Barcelona'
        ]);

        Jugador::create([
            'file_uri' => 'Gerard-pique.png',
            'nombre' => 'Gerard',
            'apellido' => 'Piqué',
            'fecha_nac' => '1987-02-02',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '3',
            'equipo_id' => 1, //'FC Barcelona'
        ]);

        Jugador::create([
            'file_uri' => 'Sergio-busquets.png',
            'nombre' => 'Sergio',
            'apellido' => 'Busquets',
            'fecha_nac' => '1988-07-16',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '5',
            'equipo_id' => 1, //'FC Barcelona'
        ]);

        Jugador::create([
            'file_uri' => 'Frenkie-de-jong.png',
            'nombre' => 'Frenkie',
            'apellido' => 'de Jong',
            'fecha_nac' => '1997-05-12',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '21',
            'equipo_id' => 1, //'FC Barcelona'
        ]);

        Jugador::create([
            'file_uri' => 'Pedro-Gonzalez-Lopez.png',
            'nombre' => 'Pedro',
            'apellido' => 'González López',
            'fecha_nac' => '2002-11-25',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '16',
            'equipo_id' => 1, //'FC Barcelona'
        ]);

        Jugador::create([
            'file_uri' => 'Robert-lewandowski.png',
            'nombre' => 'Robert',
            'apellido' => 'Lewandowski',
            'fecha_nac' => '1988-08-21',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 1, //'FC Barcelona'
        ]);

        Jugador::create([
            'file_uri' => 'Ousmane-dembele.png',
            'nombre' => 'Ousmane',
            'apellido' => 'Dembélé',
            'fecha_nac' => '1997-05-15',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'ED',
            'num_camiseta' => '11',
            'equipo_id' => 1, //'FC Barcelona'
        ]);

        Jugador::create([
            'file_uri' => 'Lionel-messi.png',
            'nombre' => 'Lionel',
            'apellido' => 'Messi',
            'fecha_nac' => '1987-06-24',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '10',
            'equipo_id' => 1, //'FC Barcelona'
        ]);

        Jugador::create([
            'file_uri' => 'Ansu-fati.png',
            'nombre' => 'Ansu',
            'apellido' => 'Fati',
            'fecha_nac' => '2002-10-31',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EI',
            'num_camiseta' => '22',
            'equipo_id' => 1, //'FC Barcelona'
        ]);

        Jugador::create([
            'file_uri' => 'jordi-alba.png',
            'nombre' => 'Jordi',
            'apellido' => 'Alba',
            'fecha_nac' => '1989-03-21',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '18',
            'equipo_id' => 1, //'FC Barcelona'
        ]);

        Jugador::create([
            'file_uri' => 'Thibaut-courtois.png',
            'nombre' => 'Thibaut',
            'apellido' => 'Courtois',
            'fecha_nac' => '1992-05-11',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 2, //'Real Madrid CF'
        ]);

        Jugador::create([
            'file_uri' => 'Dani_carvajal.png',
            'nombre' => 'Dani',
            'apellido' => 'Carvajal',
            'fecha_nac' => '1992-01-11',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '2',
            'equipo_id' => 2, //'Real Madrid CF'
        ]);

        Jugador::create([
            'file_uri' => 'Eder-militao.png',
            'nombre' => 'Éder',
            'apellido' => 'Militão',
            'fecha_nac' => '1998-01-18',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '3',
            'equipo_id' => 2, //'Real Madrid CF'
        ]);

        Jugador::create([
            'file_uri' => 'David-alaba.png',
            'nombre' => 'David',
            'apellido' => 'Alaba',
            'fecha_nac' => '1992-06-24',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '4',
            'equipo_id' => 2, //'Real Madrid CF'
        ]);

        Jugador::create([
            'file_uri' => 'Ferland-mendy.png',
            'nombre' => 'Ferland',
            'apellido' => 'Mendy',
            'fecha_nac' => '1995-06-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '23',
            'equipo_id' => 2, //'Real Madrid CF'
        ]);

        Jugador::create([
            'file_uri' => 'Carlos_casemiro.png',
            'nombre' => 'Carlos',
            'apellido' => 'Casemiro',
            'fecha_nac' => '1992-02-23',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '14',
            'equipo_id' => 2, //'Real Madrid CF'
        ]);

        Jugador::create([
            'file_uri' => 'Luka_modric.png',
            'nombre' => 'Luka',
            'apellido' => 'Modrić',
            'fecha_nac' => '1985-09-09',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '10',
            'equipo_id' => 2, //'Real Madrid CF'
        ]);

        Jugador::create([
            'file_uri' => 'Toni_kroos.png',
            'nombre' => 'Toni',
            'apellido' => 'Kroos',
            'fecha_nac' => '1990-01-04',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '8',
            'equipo_id' => 2, //'Real Madrid CF'
        ]);

        Jugador::create([
            'file_uri' => 'Karim_benzema.png',
            'nombre' => 'Karim',
            'apellido' => 'Benzema',
            'fecha_nac' => '1987-12-19',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 2, //'Real Madrid CF'
        ]);

        Jugador::create([
            'file_uri' => 'vinicius-Junior.png',
            'nombre' => 'Vinícius',
            'apellido' => 'Júnior',
            'fecha_nac' => '2000-07-12',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EI',
            'num_camiseta' => '20',
            'equipo_id' => 2, //'Real Madrid CF'
        ]);

        Jugador::create([
            'file_uri' => 'Jan_oblak.png',
            'nombre' => 'Jan',
            'apellido' => 'Oblak',
            'fecha_nac' => '1993-01-07',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '13',
            'equipo_id' => 3, //'Atlético de Madrid'
        ]);

        Jugador::create([
            'file_uri' => 'Kieran_trippier.png',
            'nombre' => 'Kieran',
            'apellido' => 'Trippier',
            'fecha_nac' => '1990-09-19',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '23',
            'equipo_id' => 3, //'Atlético de Madrid'
        ]);

        Jugador::create([
            'file_uri' => 'Jose_jimenez.png',
            'nombre' => 'José',
            'apellido' => 'Jiménez',
            'fecha_nac' => '1995-01-20',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '2',
            'equipo_id' => 3, //'Atlético de Madrid'
        ]);

        Jugador::create([
            'file_uri' => 'Stefan_savic.png',
            'nombre' => 'Stefan',
            'apellido' => 'Savić',
            'fecha_nac' => '1991-01-12',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '15',
            'equipo_id' => 3, //'Atlético de Madrid'
        ]);

        Jugador::create([
            'file_uri' => 'Renan_lodi.png',
            'nombre' => 'Renan',
            'apellido' => 'Lodi',
            'fecha_nac' => '1998-04-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '12',
            'equipo_id' => 3, //'Atlético de Madrid'
        ]);

        Jugador::create([
            'file_uri' => 'Rodrigo_de-paul.png',
            'nombre' => 'Rodrigo',
            'apellido' => 'De Paul',
            'fecha_nac' => '1994-05-24',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '5',
            'equipo_id' => 3, //'Atlético de Madrid'
        ]);

        Jugador::create([
            'file_uri' => 'Jorge_koke.png',
            'nombre' => 'Jorge',
            'apellido' => 'Resurrección Merodio (Koke)',
            'fecha_nac' => '1992-01-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '6',
            'equipo_id' => 3, //'Atlético de Madrid'
        ]);

        Jugador::create([
            'file_uri' => 'Angel_correa.png',
            'nombre' => 'Ángel',
            'apellido' => 'Correa',
            'fecha_nac' => '1995-03-09',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'ED',
            'num_camiseta' => '10',
            'equipo_id' => 3, //'Atlético de Madrid'
        ]);

        Jugador::create([
            'file_uri' => 'Luis_suarez.png',
            'nombre' => 'Luis',
            'apellido' => 'Suárez',
            'fecha_nac' => '1987-01-24',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 3, //'Atlético de Madrid'
        ]);

        Jugador::create([
            'file_uri' => 'Joao-felix.png',
            'nombre' => 'João',
            'apellido' => 'Félix',
            'fecha_nac' => '1999-11-10',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EI',
            'num_camiseta' => '7',
            'equipo_id' => 3, //'Atlético de Madrid'
        ]);

        Jugador::create([
            'file_uri' => 'bounou.png',
            'nombre' => 'Yassine',
            'apellido' => 'Bounou',
            'fecha_nac' => '1991-04-05',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '13',
            'equipo_id' => 4, //'Sevilla FC'
        ]);

        Jugador::create([
            'file_uri' => 'navas.png',
            'nombre' => 'Jesús',
            'apellido' => 'Navas',
            'fecha_nac' => '1985-11-21',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '16',
            'equipo_id' => 4, //'Sevilla FC'
        ]);

        Jugador::create([
            'file_uri' => 'kounde.png',
            'nombre' => 'Jules',
            'apellido' => 'Koundé',
            'fecha_nac' => '1998-11-12',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '23',
            'equipo_id' => 4, //'Sevilla FC'
        ]);

        Jugador::create([
            'file_uri' => 'coutinho.png',
            'nombre' => 'Diego',
            'apellido' => 'Carlos',
            'fecha_nac' => '1993-03-15',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '20',
            'equipo_id' => 4, //'Sevilla FC'
        ]);

        Jugador::create([
            'file_uri' => 'acuna.png',
            'nombre' => 'Marcos',
            'apellido' => 'Acuña',
            'fecha_nac' => '1991-10-28',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '19',
            'equipo_id' => 4, //'Sevilla FC'
        ]);

        Jugador::create([
            'file_uri' => 'paredes.png',
            'nombre' => 'Leandro',
            'apellido' => 'Paredes',
            'fecha_nac' => '1994-06-29',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '5',
            'equipo_id' => 4, //'Sevilla FC'
        ]);

        Jugador::create([
            'file_uri' => 'fernando.png',
            'nombre' => 'Fernando',
            'apellido' => 'Reges',
            'fecha_nac' => '1992-07-25',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '25',
            'equipo_id' => 4, //'Sevilla FC'
        ]);

        Jugador::create([
            'file_uri' => 'rakitic.png',
            'nombre' => 'Ivan',
            'apellido' => 'Rakitić',
            'fecha_nac' => '1988-03-10',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '10',
            'equipo_id' => 4, //'Sevilla FC'
        ]);

        Jugador::create([
            'file_uri' => 'en-nesyri.png',
            'nombre' => 'Youssef',
            'apellido' => 'En-Nesyri',
            'fecha_nac' => '1997-06-01',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '15',
            'equipo_id' => 4, //'Sevilla FC'
        ]);

        Jugador::create([
            'file_uri' => 'oliviera.png',
            'nombre' => 'João',
            'apellido' => 'Oliveira',
            'fecha_nac' => '1997-09-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EI',
            'num_camiseta' => '11',
            'equipo_id' => 4, //'Sevilla FC'
        ]);

        Jugador::create([
            'file_uri' => 'remiro.png',
            'nombre' => 'Álex',
            'apellido' => 'Remiro',
            'fecha_nac' => '1994-03-24',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 5, //'Real Sociedad'
        ]);

        Jugador::create([
            'file_uri' => 'zaldúa.png',
            'nombre' => 'Joseba',
            'apellido' => 'Zaldúa',
            'fecha_nac' => '1993-11-24',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '2',
            'equipo_id' => 5, //'Real Sociedad'
        ]);

        Jugador::create([
            'file_uri' => 'le-normand.png',
            'nombre' => 'Aritz',
            'apellido' => 'Elustondo',
            'fecha_nac' => '1994-11-07',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '24',
            'equipo_id' => 5, //'Real Sociedad'
        ]);

        Jugador::create([
            'file_uri' => 'sagnan.png',
            'nombre' => 'Modibo',
            'apellido' => 'Sagnan',
            'fecha_nac' => '1997-12-30',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '4',
            'equipo_id' => 5, //'Real Sociedad'
        ]);

        Jugador::create([
            'file_uri' => 'rodrigo.png',
            'nombre' => 'Rodrigo',
            'apellido' => 'Rodríguez',
            'fecha_nac' => '1995-06-06',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '5',
            'equipo_id' => 5, //'Real Sociedad'
        ]);

        Jugador::create([
            'file_uri' => 'merino.png',
            'nombre' => 'Mikel',
            'apellido' => 'Merino',
            'fecha_nac' => '1996-06-22',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '8',
            'equipo_id' => 5, //'Real Sociedad'
        ]);

        Jugador::create([
            'file_uri' => 'silva.png',
            'nombre' => 'David',
            'apellido' => 'Silva',
            'fecha_nac' => '1986-01-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '21',
            'equipo_id' => 5, //'Real Sociedad'
        ]);

        Jugador::create([
            'file_uri' => 'irúa.png',
            'nombre' => 'Jon',
            'apellido' => 'Iruábal',
            'fecha_nac' => '1999-05-11',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '6',
            'equipo_id' => 5, //'Real Sociedad'
        ]);

        Jugador::create([
            'file_uri' => 'willian-jose.png',
            'nombre' => 'Willian',
            'apellido' => 'José',
            'fecha_nac' => '1991-11-23',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 5, //'Real Sociedad'
        ]);

        Jugador::create([
            'file_uri' => 'portu.png',
            'nombre' => 'José',
            'apellido' => 'Portu',
            'fecha_nac' => '1992-10-21',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EI',
            'num_camiseta' => '17',
            'equipo_id' => 5, //'Real Sociedad'
        ]);

        Jugador::create([
            'file_uri' => 'claudio-bravo.png',
            'nombre' => 'Claudio',
            'apellido' => 'Bravo',
            'fecha_nac' => '1983-04-13',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '13',
            'equipo_id' => 6, //'Real Betis'
        ]);

        Jugador::create([
            'file_uri' => 'bartra.png',
            'nombre' => 'Marc',
            'apellido' => 'Bartra',
            'fecha_nac' => '1991-01-15',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '5',
            'equipo_id' => 6, //'Real Betis'
        ]);

        Jugador::create([
            'file_uri' => 'mangala.png',
            'nombre' => 'Eliaquim',
            'apellido' => 'Mangala',
            'fecha_nac' => '1991-02-13',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '15',
            'equipo_id' => 6, //'Real Betis'
        ]);

        Jugador::create([
            'file_uri' => 'guido.png',
            'nombre' => 'Guido',
            'apellido' => 'Rodríguez',
            'fecha_nac' => '1994-04-22',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '18',
            'equipo_id' => 6, //'Real Betis'
        ]);

        Jugador::create([
            'file_uri' => 'carvalho.png',
            'nombre' => 'William',
            'apellido' => 'Carvalho',
            'fecha_nac' => '1992-04-07',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '14',
            'equipo_id' => 6, //'Real Betis'
        ]);

        Jugador::create([
            'file_uri' => 'canales.png',
            'nombre' => 'Sergio',
            'apellido' => 'Canales',
            'fecha_nac' => '1991-02-16',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '10',
            'equipo_id' => 6, //'Real Betis'
        ]);

        Jugador::create([
            'file_uri' => 'fekir.png',
            'nombre' => 'Nabil',
            'apellido' => 'Fekir',
            'fecha_nac' => '1993-07-18',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '11',
            'equipo_id' => 6, //'Real Betis'
        ]);

        Jugador::create([
            'file_uri' => 'juanmi.png',
            'nombre' => 'Juan',
            'apellido' => 'Mi',
            'fecha_nac' => '1993-05-20',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '7',
            'equipo_id' => 6, //'Real Betis'
        ]);

        Jugador::create([
            'file_uri' => 'borja-iguez.png',
            'nombre' => 'Borja',
            'apellido' => 'Iglesias',
            'fecha_nac' => '1993-01-17',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 6, //'Real Betis'
        ]);

        Jugador::create([
            'file_uri' => 'alex-moreno.png',
            'nombre' => 'Álex',
            'apellido' => 'Moreno',
            'fecha_nac' => '1993-07-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '20',
            'equipo_id' => 6, //'Real Betis'
        ]);

        Jugador::create([
            'file_uri' => 'domenech.png',
            'nombre' => 'Jaume',
            'apellido' => 'Domènech',
            'fecha_nac' => '1990-01-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '13',
            'equipo_id' => 7, //'Valencia CF'
        ]);

        Jugador::create([
            'file_uri' => 'gabriel-paus.png',
            'nombre' => 'Gabriel',
            'apellido' => 'Paus',
            'fecha_nac' => '1997-02-25',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '6',
            'equipo_id' => 7, //'Valencia CF'
        ]);

        Jugador::create([
            'file_uri' => 'garay.png',
            'nombre' => 'Ezequiel',
            'apellido' => 'Garay',
            'fecha_nac' => '1986-10-25',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '24',
            'equipo_id' => 7, //'Valencia CF'
        ]);

        Jugador::create([
            'file_uri' => 'albiol.png',
            'nombre' => 'Raúl',
            'apellido' => 'Albiol',
            'fecha_nac' => '1985-09-04',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '6',
            'equipo_id' => 7, //'Valencia CF'
        ]);

        Jugador::create([
            'file_uri' => 'soler.png',
            'nombre' => 'Carlos',
            'apellido' => 'Soler',
            'fecha_nac' => '1997-01-02',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '18',
            'equipo_id' => 7, //'Valencia CF'
        ]);

        Jugador::create([
            'file_uri' => 'guedes.png',
            'nombre' => 'Gonçalo',
            'apellido' => 'Guedes',
            'fecha_nac' => '1996-11-29',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EI',
            'num_camiseta' => '7',
            'equipo_id' => 7, //'Valencia CF'
        ]);

        Jugador::create([
            'file_uri' => 'parejo.png',
            'nombre' => 'Dani',
            'apellido' => 'Parejo',
            'fecha_nac' => '1989-04-16',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '10',
            'equipo_id' => 7, //'Valencia CF'
        ]);

        Jugador::create([
            'file_uri' => 'maxi-gomez.png',
            'nombre' => 'Maxi',
            'apellido' => 'Gómez',
            'fecha_nac' => '1996-08-14',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '22',
            'equipo_id' => 7, //'Valencia CF'
        ]);

        Jugador::create([
            'file_uri' => 'raphinha.png',
            'nombre' => 'Raphinha',
            'apellido' => 'Ramos',
            'fecha_nac' => '1997-03-09',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '11',
            'equipo_id' => 7, //'Valencia CF'
        ]);

        Jugador::create([
            'file_uri' => 'gameiro.png',
            'nombre' => 'Kevin',
            'apellido' => 'Gameiro',
            'fecha_nac' => '1987-08-09',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '21',
            'equipo_id' => 7, //'Valencia CF'
        ]);

        Jugador::create([
            'file_uri' => 'unai-simon.png',
            'nombre' => 'Unai',
            'apellido' => 'Simón',
            'fecha_nac' => '1997-06-11',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 8, //'Athletic Club de Bilbao'
        ]);

        Jugador::create([
            'file_uri' => 'Iñigo-Martínez.png',
            'nombre' => 'Iñigo',
            'apellido' => 'Martínez',
            'fecha_nac' => '1991-05-17',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '4',
            'equipo_id' => 8, //'Athletic Club de Bilbao'
        ]);

        Jugador::create([
            'file_uri' => 'yeray-alvarez.png',
            'nombre' => 'Yeray',
            'apellido' => 'Álvarez',
            'fecha_nac' => '1995-06-24',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '5',
            'equipo_id' => 8, //'Athletic Club de Bilbao'
        ]);

        Jugador::create([
            'file_uri' => 'andoni-irúábal.png',
            'nombre' => 'Andoni',
            'apellido' => 'Iruábal',
            'fecha_nac' => '1998-09-27',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '2',
            'equipo_id' => 8, //'Athletic Club de Bilbao'
        ]);

        Jugador::create([
            'file_uri' => 'mikel-balenciaga.png',
            'nombre' => 'Mikel',
            'apellido' => 'Balenziaga',
            'fecha_nac' => '1988-02-29',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '3',
            'equipo_id' => 8, //'Athletic Club de Bilbao'
        ]);

        Jugador::create([
            'file_uri' => 'dani-garcia.png',
            'nombre' => 'Dani',
            'apellido' => 'García',
            'fecha_nac' => '1990-02-24',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '14',
            'equipo_id' => 8, //'Athletic Club de Bilbao'
        ]);

        Jugador::create([
            'file_uri' => 'beñat-etcheberria.png',
            'nombre' => 'Beñat',
            'apellido' => 'Etxeberría',
            'fecha_nac' => '1993-01-13',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '16',
            'equipo_id' => 8, //'Athletic Club de Bilbao'
        ]);

        Jugador::create([
            'file_uri' => 'iñaki-williams.png',
            'nombre' => 'Iñaki',
            'apellido' => 'Williams',
            'fecha_nac' => '1994-06-15',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 8, //'Athletic Club de Bilbao'
        ]);

        Jugador::create([
            'file_uri' => 'asier-villalibre.png',
            'nombre' => 'Asier',
            'apellido' => 'Villalibre',
            'fecha_nac' => '1997-01-30',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '18',
            'equipo_id' => 8, //'Athletic Club de Bilbao'
        ]);

        Jugador::create([
            'file_uri' => 'óscar-de-marcos.png',
            'nombre' => 'Óscar',
            'apellido' => 'De Marcos',
            'fecha_nac' => '1989-04-14',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'ED',
            'num_camiseta' => '11',
            'equipo_id' => 8, //'Athletic Club de Bilbao'
        ]);

        Jugador::create([
            'file_uri' => 'sergio-ascencio.png',
            'nombre' => 'Sergio',
            'apellido' => 'Asenjo',
            'fecha_nac' => '1989-06-28',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 9, //'Villarreal CF'
        ]);

        Jugador::create([
            'file_uri' => 'pau-torres.png',
            'nombre' => 'Pau',
            'apellido' => 'Torres',
            'fecha_nac' => '1997-01-16',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '4',
            'equipo_id' => 9, //'Villarreal CF'
        ]);

        Jugador::create([
            'file_uri' => 'albiol.png',
            'nombre' => 'Raúl',
            'apellido' => 'Albiol',
            'fecha_nac' => '1985-09-04',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '3',
            'equipo_id' => 9, //'Villarreal CF'
        ]);

        Jugador::create([
            'file_uri' => 'daniel-rasmussen.png',
            'nombre' => 'Daniel',
            'apellido' => 'Rasmussen',
            'fecha_nac' => '1998-08-11',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '15',
            'equipo_id' => 9, //'Villarreal CF'
        ]);

        Jugador::create([
            'file_uri' => 'chukwueze.png',
            'nombre' => 'Samuel',
            'apellido' => 'Chukwueze',
            'fecha_nac' => '1999-05-22',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'ED',
            'num_camiseta' => '11',
            'equipo_id' => 9, //'Villarreal CF'
        ]);

        Jugador::create([
            'file_uri' => 'parejo.png',
            'nombre' => 'Dani',
            'apellido' => 'Parejo',
            'fecha_nac' => '1989-04-16',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '21',
            'equipo_id' => 9, //'Villarreal CF'
        ]);

        Jugador::create([
            'file_uri' => 'moi-gomez.png',
            'nombre' => 'Moi',
            'apellido' => 'Gómez',
            'fecha_nac' => '1997-06-24',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '17',
            'equipo_id' => 9, //'Villarreal CF'
        ]);

        Jugador::create([
            'file_uri' => 'gerard-moreno.png',
            'nombre' => 'Gerard',
            'apellido' => 'Moreno',
            'fecha_nac' => '1992-04-07',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '7',
            'equipo_id' => 9, //'Villarreal CF'
        ]);

        Jugador::create([
            'file_uri' => 'paco-alcacer.png',
            'nombre' => 'Paco',
            'apellido' => 'Alcácer',
            'fecha_nac' => '1993-08-22',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 9, //'Villarreal CF'
        ]);

        Jugador::create([
            'file_uri' => 'ruben-pena.png',
            'nombre' => 'Rubén',
            'apellido' => 'Peña',
            'fecha_nac' => '1990-03-03',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'ED',
            'num_camiseta' => '19',
            'equipo_id' => 9, //'Villarreal CF'
        ]);

        Jugador::create([
            'file_uri' => 'rubén-blanco.png',
            'nombre' => 'Rubén',
            'apellido' => 'Blanco',
            'fecha_nac' => '1996-01-25',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '13',
            'equipo_id' => 10, //'RC Celta de Vigo'
        ]);

        Jugador::create([
            'file_uri' => 'jeison-murillo.png',
            'nombre' => 'Jeison',
            'apellido' => 'Murillo',
            'fecha_nac' => '1992-05-27',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '22',
            'equipo_id' => 10, //'RC Celta de Vigo'
        ]);

        Jugador::create([
            'file_uri' => 'nesta.png',
            'nombre' => 'Néstor',
            'apellido' => 'Araujo',
            'fecha_nac' => '1991-08-29',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '4',
            'equipo_id' => 10, //'RC Celta de Vigo'
        ]);

        Jugador::create([
            'file_uri' => 'andrea-bueno.png',
            'nombre' => 'Andrea',
            'apellido' => 'Buena',
            'fecha_nac' => '1998-06-03',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DF',
            'num_camiseta' => '5',
            'equipo_id' => 10, //'RC Celta de Vigo'
        ]);

        Jugador::create([
            'file_uri' => 'manuel-oliver.png',
            'nombre' => 'Manuel',
            'apellido' => 'Oliveira',
            'fecha_nac' => '1999-03-10',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '6',
            'equipo_id' => 10, //'RC Celta de Vigo'
        ]);

        Jugador::create([
            'file_uri' => 'francisco-javier.png',
            'nombre' => 'Francisco',
            'apellido' => 'Javier',
            'fecha_nac' => '1996-08-25',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '18',
            'equipo_id' => 10, //'RC Celta de Vigo'
        ]);

        Jugador::create([
            'file_uri' => 'denis-suarez.png',
            'nombre' => 'Denis',
            'apellido' => 'Suárez',
            'fecha_nac' => '1994-02-06',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '23',
            'equipo_id' => 10, //'RC Celta de Vigo'
        ]);

        Jugador::create([
            'file_uri' => 'bamba-dieng.png',
            'nombre' => 'Bamba',
            'apellido' => 'Dieng',
            'fecha_nac' => '1998-09-11',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '10',
            'equipo_id' => 10, //'RC Celta de Vigo'
        ]);

        Jugador::create([
            'file_uri' => 'iglesias-pablo.png',
            'nombre' => 'Iglesias',
            'apellido' => 'Pablo',
            'fecha_nac' => '1996-10-22',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '7',
            'equipo_id' => 10, //'RC Celta de Vigo'
        ]);

        Jugador::create([
            'file_uri' => 'gabriel-lahera.png',
            'nombre' => 'Gabriel',
            'apellido' => 'Lahera',
            'fecha_nac' => '1993-02-03',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'ED',
            'num_camiseta' => '17',
            'equipo_id' => 10, //'RC Celta de Vigo'
        ]);


//Premier League
        Jugador::create([
            'file_uri' => 'Aaron_ramsdale.png',
            'nombre' => 'Aaron',
            'apellido' => 'Ramsdale',
            'fecha_nac' => '1998-05-14',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 11,  // Arsenal
        ]);

        Jugador::create([
            'file_uri' => 'Ben_white.png',
            'nombre' => 'Ben',
            'apellido' => 'White',
            'fecha_nac' => '1997-10-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '4',
            'equipo_id' => 11,  // Arsenal
        ]);

        Jugador::create([
            'file_uri' => 'Gabriel_Magalhães.png',
            'nombre' => 'Gabriel',
            'apellido' => 'Magalhães',
            'fecha_nac' => '1997-12-19',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '6',
            'equipo_id' => 11,  // Arsenal
        ]);

        Jugador::create([
            'file_uri' => 'William_saliba.png',
            'nombre' => 'William',
            'apellido' => 'Saliba',
            'fecha_nac' => '2001-03-24',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '12',
            'equipo_id' => 11,  // Arsenal
        ]);

        Jugador::create([
            'file_uri' => 'Oleksandr_zinchenko.png',
            'nombre' => 'Oleksandr',
            'apellido' => 'Zinchenko',
            'fecha_nac' => '1996-12-15',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '35',
            'equipo_id' => 11,  // Arsenal
        ]);

        Jugador::create([
            'file_uri' => 'Thomas_parthey.png',
            'nombre' => 'Thomas',
            'apellido' => 'Partey',
            'fecha_nac' => '1993-06-13',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '5',
            'equipo_id' => 11,  // Arsenal
        ]);

        Jugador::create([
            'file_uri' => 'Martin_odegaard.png',
            'nombre' => 'Martin',
            'apellido' => 'Ödegaard',
            'fecha_nac' => '1998-12-17',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '8',
            'equipo_id' => 11,  // Arsenal
        ]);

        Jugador::create([
            'file_uri' => 'Bukayo_saka.png',
            'nombre' => 'Bukayo',
            'apellido' => 'Saka',
            'fecha_nac' => '2001-09-05',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EXT',
            'num_camiseta' => '7',
            'equipo_id' => 11,  // Arsenal
        ]);

        Jugador::create([
            'file_uri' => 'Gabriel_martinelli.png',
            'nombre' => 'Gabriel',
            'apellido' => 'Martinelli',
            'fecha_nac' => '2001-06-18',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EXT',
            'num_camiseta' => '11',
            'equipo_id' => 11,  // Arsenal
        ]);

        Jugador::create([
            'file_uri' => 'Gabriel_jesus.png',
            'nombre' => 'Gabriel',
            'apellido' => 'Jesus',
            'fecha_nac' => '1997-04-03',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 11,  // Arsenal
        ]);

        Jugador::create([
            'file_uri' => 'AlissonBecker.png',
            'nombre' => 'Alisson',
            'apellido' => 'Becker',
            'fecha_nac' => '1992-10-02',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 12,  // Liverpool
        ]);

        Jugador::create([
            'file_uri' => 'Trent_alexander_arnold.png',
            'nombre' => 'Trent',
            'apellido' => 'Alexander-Arnold',
            'fecha_nac' => '1998-10-07',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '66',
            'equipo_id' => 12,  // Liverpool
        ]);

        Jugador::create([
            'file_uri' => 'Virgil_van_dijk.png',
            'nombre' => 'Virgil',
            'apellido' => 'Van Dijk',
            'fecha_nac' => '1991-07-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '4',
            'equipo_id' => 12,  // Liverpool
        ]);

        Jugador::create([
            'file_uri' => 'Joel_matip.png',
            'nombre' => 'Joel',
            'apellido' => 'Matip',
            'fecha_nac' => '1991-08-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '32',
            'equipo_id' => 12,  // Liverpool
        ]);

        Jugador::create([
            'file_uri' => 'Andy_robertson.png',
            'nombre' => 'Andrew',
            'apellido' => 'Robertson',
            'fecha_nac' => '1994-03-11',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '26',
            'equipo_id' => 12,  // Liverpool
        ]);

        Jugador::create([
            'file_uri' => 'FabinhoTavares.png',
            'nombre' => 'Fabinho',
            'apellido' => 'Tavares',
            'fecha_nac' => '1993-10-23',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '3',
            'equipo_id' => 12,  // Liverpool
        ]);

        Jugador::create([
            'file_uri' => 'Jordan_henderson.png',
            'nombre' => 'Jordan',
            'apellido' => 'Henderson',
            'fecha_nac' => '1990-06-17',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '14',
            'equipo_id' => 12,  // Liverpool
        ]);

        Jugador::create([
            'file_uri' => 'Mohamed_salah.png',
            'nombre' => 'Mohamed',
            'apellido' => 'Salah',
            'fecha_nac' => '1992-06-15',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EXT',
            'num_camiseta' => '11',
            'equipo_id' => 12,  // Liverpool
        ]);

        Jugador::create([
            'file_uri' => 'Luis_diaz.png',
            'nombre' => 'Luis',
            'apellido' => 'Díaz',
            'fecha_nac' => '1997-01-13',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EXT',
            'num_camiseta' => '23',
            'equipo_id' => 12,  // Liverpool
        ]);

        Jugador::create([
            'file_uri' => 'Darwin_nunez.png',
            'nombre' => 'Darwin',
            'apellido' => 'Núñez',
            'fecha_nac' => '1999-06-24',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 12,  // Liverpool
        ]);

        Jugador::create([
            'file_uri' => 'EdersonMoraes.png',
            'nombre' => 'Ederson',
            'apellido' => 'Moraes',
            'fecha_nac' => '1993-10-17',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '31',
            'equipo_id' => 13,  // Manchester City
        ]);

        Jugador::create([
            'file_uri' => 'Joao_cancelo.png',
            'nombre' => 'João',
            'apellido' => 'Cancelo',
            'fecha_nac' => '1994-05-27',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '27',
            'equipo_id' => 13,  // Manchester City
        ]);

        Jugador::create([
            'file_uri' => 'Ruben_dias.png',
            'nombre' => 'Ruben',
            'apellido' => 'Dias',
            'fecha_nac' => '1997-05-14',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '3',
            'equipo_id' => 13,  // Manchester City
        ]);

        Jugador::create([
            'file_uri' => 'John_stones.png',
            'nombre' => 'John',
            'apellido' => 'Stones',
            'fecha_nac' => '1994-05-28',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '5',
            'equipo_id' => 13,  // Manchester City
        ]);

        Jugador::create([
            'file_uri' => 'Aymeric_laporte.png',
            'nombre' => 'Aymeric',
            'apellido' => 'Laporte',
            'fecha_nac' => '1994-05-27',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '14',
            'equipo_id' => 13,  // Manchester City
        ]);

        Jugador::create([
            'file_uri' => 'RodriHernández.png',
            'nombre' => 'Rodri',
            'apellido' => 'Hernández',
            'fecha_nac' => '1996-06-22',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '16',
            'equipo_id' => 13,  // Manchester City
        ]);

        Jugador::create([
            'file_uri' => 'Kevin_de_bruyne.png',
            'nombre' => 'Kevin',
            'apellido' => 'De Bruyne',
            'fecha_nac' => '1991-06-28',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '17',
            'equipo_id' => 13,  // Manchester City
        ]);

        Jugador::create([
            'file_uri' => 'Bernardo_silva.png',
            'nombre' => 'Bernardo',
            'apellido' => 'Silva',
            'fecha_nac' => '1994-08-10',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '20',
            'equipo_id' => 13,  // Manchester City
        ]);

        Jugador::create([
            'file_uri' => 'Riyad_mahrez.png',
            'nombre' => 'Riyad',
            'apellido' => 'Mahrez',
            'fecha_nac' => '1991-02-21',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EXT',
            'num_camiseta' => '26',
            'equipo_id' => 13,  // Manchester City
        ]);

        Jugador::create([
            'file_uri' => 'erling_haaland.png',
            'nombre' => 'Erling',
            'apellido' => 'Haaland',
            'fecha_nac' => '2000-07-21',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 13,  // Manchester City
        ]);

        Jugador::create([
            'file_uri' => 'David_de_gea.png',
            'nombre' => 'David',
            'apellido' => 'De Gea',
            'fecha_nac' => '1990-11-07',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 14,  // Manchester United
        ]);

        Jugador::create([
            'file_uri' => 'Aaron_wan_bissaka.png',
            'nombre' => 'Aaron',
            'apellido' => 'Wan-Bissaka',
            'fecha_nac' => '1997-11-26',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '29',
            'equipo_id' => 14,  // Manchester United
        ]);

        Jugador::create([
            'file_uri' => 'RaphaëlVarane.png',
            'nombre' => 'Raphaël',
            'apellido' => 'Varane',
            'fecha_nac' => '1993-04-25',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '19',
            'equipo_id' => 14,  // Manchester United
        ]);

        Jugador::create([
            'file_uri' => 'LisandroMartinez.png',
            'nombre' => 'Lisandro',
            'apellido' => 'Martínez',
            'fecha_nac' => '1998-01-18',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '6',
            'equipo_id' => 14,  // Manchester United
        ]);

        Jugador::create([
            'file_uri' => 'LukeShaw.png',
            'nombre' => 'Luke',
            'apellido' => 'Shaw',
            'fecha_nac' => '1995-07-12',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '23',
            'equipo_id' => 14,  // Manchester United
        ]);

        Jugador::create([
            'file_uri' => 'PaulScholes.png',
            'nombre' => 'Paul',
            'apellido' => 'Scholes',
            'fecha_nac' => '1974-11-16',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '18',
            'equipo_id' => 14,  // Manchester United
        ]);

        Jugador::create([
            'file_uri' => 'Bruno_fernandes.png',
            'nombre' => 'Bruno',
            'apellido' => 'Fernandes',
            'fecha_nac' => '1994-09-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '8',
            'equipo_id' => 14,  // Manchester United
        ]);

        Jugador::create([
            'file_uri' => 'DavidBeckham.png',
            'nombre' => 'David',
            'apellido' => 'Beckham',
            'fecha_nac' => '1975-05-02',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MCO',
            'num_camiseta' => '10',
            'equipo_id' => 14,  // Manchester United
        ]);

        Jugador::create([
            'file_uri' => 'AntonyMatheus_dos_Santos.png',
            'nombre' => 'Antony',
            'apellido' => 'Matheus dos Santos',
            'fecha_nac' => '2000-02-24',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EXT',
            'num_camiseta' => '21',
            'equipo_id' => 14,  // Manchester United
        ]);

        Jugador::create([
            'file_uri' => 'CristianoRonaldo.png',
            'nombre' => 'Cristiano',
            'apellido' => 'Ronaldo',
            'fecha_nac' => '1985-02-05',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '7',
            'equipo_id' => 14,  // Manchester United
        ]);

        Jugador::create([
            'file_uri' => 'martinez.png',
            'nombre' => 'Emiliano',
            'apellido' => 'Martínez',
            'fecha_nac' => '1992-09-02',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 15,  // Aston Villa
        ]);

        Jugador::create([
            'file_uri' => 'cash.png',
            'nombre' => 'Matty',
            'apellido' => 'Cash',
            'fecha_nac' => '1997-08-07',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '2',
            'equipo_id' => 15,  // Aston Villa
        ]);

        Jugador::create([
            'file_uri' => 'konza.png',
            'nombre' => 'Ezri',
            'apellido' => 'Konza',
            'fecha_nac' => '1998-10-22',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '4',
            'equipo_id' => 15,  // Aston Villa
        ]);

        Jugador::create([
            'file_uri' => 'mings.png',
            'nombre' => 'Tyrone',
            'apellido' => 'Mings',
            'fecha_nac' => '1993-03-13',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '5',
            'equipo_id' => 15,  // Aston Villa
        ]);

        Jugador::create([
            'file_uri' => 'digne.png',
            'nombre' => 'Lucas',
            'apellido' => 'Digne',
            'fecha_nac' => '1993-11-20',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '27',
            'equipo_id' => 15,  // Aston Villa
        ]);

        Jugador::create([
            'file_uri' => 'luiz.png',
            'nombre' => 'Douglas',
            'apellido' => 'Luiz',
            'fecha_nac' => '1998-05-09',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '6',
            'equipo_id' => 15,  // Aston Villa
        ]);

        Jugador::create([
            'file_uri' => 'kamara.png',
            'nombre' => 'Boubacar',
            'apellido' => 'Kamara',
            'fecha_nac' => '2000-11-23',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '44',
            'equipo_id' => 15,  // Aston Villa
        ]);

        Jugador::create([
            'file_uri' => 'coutinho.png',
            'nombre' => 'Philippe',
            'apellido' => 'Coutinho',
            'fecha_nac' => '1992-06-12',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '23',
            'equipo_id' => 15,  // Aston Villa
        ]);

        Jugador::create([
            'file_uri' => 'watkins.png',
            'nombre' => 'Ollie',
            'apellido' => 'Watkins',
            'fecha_nac' => '1995-12-30',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '11',
            'equipo_id' => 15,  // Aston Villa
        ]);

        Jugador::create([
            'file_uri' => 'ingles.png',
            'nombre' => 'Danny',
            'apellido' => 'Ings',
            'fecha_nac' => '1992-07-23',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 15,  // Aston Villa
        ]);

        Jugador::create([
            'file_uri' => 'lloris.png',
            'nombre' => 'Hugo',
            'apellido' => 'Lloris',
            'fecha_nac' => '1986-12-26',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 16,  // Tottenham Hotspur
        ]);

        Jugador::create([
            'file_uri' => 'romero.png',
            'nombre' => 'Cristian',
            'apellido' => 'Romero',
            'fecha_nac' => '1998-04-27',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '17',
            'equipo_id' => 16,  // Tottenham Hotspur
        ]);

        Jugador::create([
            'file_uri' => 'dier.png',
            'nombre' => 'Eric',
            'apellido' => 'Dier',
            'fecha_nac' => '1994-01-15',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '15',
            'equipo_id' => 16,  // Tottenham Hotspur
        ]);

        Jugador::create([
            'file_uri' => 'davies.png',
            'nombre' => 'Ben',
            'apellido' => 'Davies',
            'fecha_nac' => '1993-04-24',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '33',
            'equipo_id' => 16,  // Tottenham Hotspur
        ]);

        Jugador::create([
            'file_uri' => 'perisic.png',
            'nombre' => 'Ivan',
            'apellido' => 'Perišić',
            'fecha_nac' => '1989-02-02',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EXT',
            'num_camiseta' => '14',
            'equipo_id' => 16,  // Tottenham Hotspur
        ]);

        Jugador::create([
            'file_uri' => 'hoybier.png',
            'nombre' => 'Pierre-Emile',
            'apellido' => 'Højbjerg',
            'fecha_nac' => '1995-08-05',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '5',
            'equipo_id' => 16,  // Tottenham Hotspur
        ]);

        Jugador::create([
            'file_uri' => 'bentancur.png',
            'nombre' => 'Rodrigo',
            'apellido' => 'Bentancur',
            'fecha_nac' => '1997-06-25',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '30',
            'equipo_id' => 16,  // Tottenham Hotspur
        ]);

        Jugador::create([
            'file_uri' => 'kulusevski.png',
            'nombre' => 'Dejan',
            'apellido' => 'Kulusevski',
            'fecha_nac' => '2000-04-25',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EXT',
            'num_camiseta' => '21',
            'equipo_id' => 16,  // Tottenham Hotspur
        ]);

        Jugador::create([
            'file_uri' => 'son.png',
            'nombre' => 'Son',
            'apellido' => 'Heung-Min',
            'fecha_nac' => '1992-07-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EXT',
            'num_camiseta' => '7',
            'equipo_id' => 16,  // Tottenham Hotspur
        ]);

        Jugador::create([
            'file_uri' => 'kane.png',
            'nombre' => 'Harry',
            'apellido' => 'Kane',
            'fecha_nac' => '1993-07-28',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '10',
            'equipo_id' => 16,  // Tottenham Hotspur
        ]);

        Jugador::create([
            'file_uri' => 'pope.png',
            'nombre' => 'Nick',
            'apellido' => 'Pope',
            'fecha_nac' => '1992-04-19',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '22',
            'equipo_id' => 17,  // Newcastle United
        ]);

        Jugador::create([
            'file_uri' => 'trippier.png',
            'nombre' => 'Kieran',
            'apellido' => 'Trippier',
            'fecha_nac' => '1990-09-19',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '2',
            'equipo_id' => 17,  // Newcastle United
        ]);

        Jugador::create([
            'file_uri' => 'schar.png',
            'nombre' => 'Fabian',
            'apellido' => 'Schär',
            'fecha_nac' => '1991-12-20',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '5',
            'equipo_id' => 17,  // Newcastle United
        ]);

        Jugador::create([
            'file_uri' => 'burn.png',
            'nombre' => 'Dan',
            'apellido' => 'Burn',
            'fecha_nac' => '1991-11-09',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '33',
            'equipo_id' => 17,  // Newcastle United
        ]);

        Jugador::create([
            'file_uri' => 'targett.png',
            'nombre' => 'Matt',
            'apellido' => 'Targett',
            'fecha_nac' => '1996-01-22',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '13',
            'equipo_id' => 17,  // Newcastle United
        ]);

        Jugador::create([
            'file_uri' => 'guimaraes.png',
            'nombre' => 'Bruno',
            'apellido' => 'Guimarães',
            'fecha_nac' => '1997-11-16',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '39',
            'equipo_id' => 17,  // Newcastle United
        ]);

        Jugador::create([
            'file_uri' => 'longstaff.png',
            'nombre' => 'Sean',
            'apellido' => 'Longstaff',
            'fecha_nac' => '1997-10-30',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '36',
            'equipo_id' => 17,  // Newcastle United
        ]);

        Jugador::create([
            'file_uri' => 'wilson.png',
            'nombre' => 'Callum',
            'apellido' => 'Wilson',
            'fecha_nac' => '1992-02-27',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 17,  // Newcastle United
        ]);

        Jugador::create([
            'file_uri' => 'almiron.png',
            'nombre' => 'Miguel',
            'apellido' => 'Almirón',
            'fecha_nac' => '1994-02-10',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EXT',
            'num_camiseta' => '24',
            'equipo_id' => 17,  // Newcastle United
        ]);

        Jugador::create([
            'file_uri' => 'isaac.png',
            'nombre' => 'Alexander',
            'apellido' => 'Isak',
            'fecha_nac' => '1999-09-21',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '14',
            'equipo_id' => 17,  // Newcastle United
        ]);

        Jugador::create([
            'file_uri' => 'kepa.png',
            'nombre' => 'Kepa',
            'apellido' => 'Arrizabalaga',
            'fecha_nac' => '1994-10-03',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 18,  // Chelsea
        ]);

        Jugador::create([
            'file_uri' => 'james.png',
            'nombre' => 'Reece',
            'apellido' => 'James',
            'fecha_nac' => '1999-12-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '24',
            'equipo_id' => 18,  // Chelsea
        ]);

        Jugador::create([
            'file_uri' => 'koulibaly.png',
            'nombre' => 'Kalidou',
            'apellido' => 'Koulibaly',
            'fecha_nac' => '1991-06-20',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '26',
            'equipo_id' => 18,  // Chelsea
        ]);

        Jugador::create([
            'file_uri' => 'silva.png',
            'nombre' => 'Thiago',
            'apellido' => 'Silva',
            'fecha_nac' => '1984-09-22',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '6',
            'equipo_id' => 18,  // Chelsea
        ]);

        Jugador::create([
            'file_uri' => 'chilwell.png',
            'nombre' => 'Ben',
            'apellido' => 'Chilwell',
            'fecha_nac' => '1996-12-21',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '21',
            'equipo_id' => 18,  // Chelsea
        ]);

        Jugador::create([
            'file_uri' => 'kovacic.png',
            'nombre' => 'Mateo',
            'apellido' => 'Kovačić',
            'fecha_nac' => '1994-05-06',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '8',
            'equipo_id' => 18,  // Chelsea
        ]);

        Jugador::create([
            'file_uri' => 'mount.png',
            'nombre' => 'Mason',
            'apellido' => 'Mount',
            'fecha_nac' => '1999-01-10',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '19',
            'equipo_id' => 18,  // Chelsea
        ]);

        Jugador::create([
            'file_uri' => 'sterling.png',
            'nombre' => 'Raheem',
            'apellido' => 'Sterling',
            'fecha_nac' => '1994-12-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EXT',
            'num_camiseta' => '17',
            'equipo_id' => 18,  // Chelsea
        ]);

        Jugador::create([
            'file_uri' => 'havertz.png',
            'nombre' => 'Kai',
            'apellido' => 'Havertz',
            'fecha_nac' => '1999-06-11',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '29',
            'equipo_id' => 18,  // Chelsea
        ]);

        Jugador::create([
            'file_uri' => 'aubameyang.png',
            'nombre' => 'Pierre-Emerick',
            'apellido' => 'Aubameyang',
            'fecha_nac' => '1989-06-18',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 18,  // Chelsea
        ]);

        Jugador::create([
            'file_uri' => 'guaita.png',
            'nombre' => 'Vicente',
            'apellido' => 'Guaita',
            'fecha_nac' => '1987-01-10',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '13',
            'equipo_id' => 19,  // Crystal Palace
        ]);

        Jugador::create([
            'file_uri' => 'mitchell.png',
            'nombre' => 'Tyrick',
            'apellido' => 'Mitchell',
            'fecha_nac' => '1999-09-01',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '3',
            'equipo_id' => 19,  // Crystal Palace
        ]);

        Jugador::create([
            'file_uri' => 'kouyaté.png',
            'nombre' => 'Cheikhou',
            'apellido' => 'Kouyaté',
            'fecha_nac' => '1989-12-21',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '8',
            'equipo_id' => 19,  // Crystal Palace
        ]);

        Jugador::create([
            'file_uri' => 'guita.png',
            'nombre' => 'James',
            'apellido' => 'Guita',
            'fecha_nac' => '1997-12-10',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '2',
            'equipo_id' => 19,  // Crystal Palace
        ]);

        Jugador::create([
            'file_uri' => 'clyne.png',
            'nombre' => 'Nathaniel',
            'apellido' => 'Clyne',
            'fecha_nac' => '1991-04-05',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '17',
            'equipo_id' => 19,  // Crystal Palace
        ]);

        Jugador::create([
            'file_uri' => 'zaha.png',
            'nombre' => 'Wilfried',
            'apellido' => 'Zaha',
            'fecha_nac' => '1992-11-10',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EXT',
            'num_camiseta' => '11',
            'equipo_id' => 19,  // Crystal Palace
        ]);

        Jugador::create([
            'file_uri' => 'eze.png',
            'nombre' => 'Eberechi',
            'apellido' => 'Eze',
            'fecha_nac' => '1998-06-29',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '10',
            'equipo_id' => 19,  // Crystal Palace
        ]);

        Jugador::create([
            'file_uri' => 'edouard.png',
            'nombre' => 'Odsonne',
            'apellido' => 'Edouard',
            'fecha_nac' => '1998-01-16',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '22',
            'equipo_id' => 19,  // Crystal Palace
        ]);

        Jugador::create([
            'file_uri' => 'mateta.png',
            'nombre' => 'Jean-Philippe',
            'apellido' => 'Mateta',
            'fecha_nac' => '1997-06-28',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '14',
            'equipo_id' => 19,  // Crystal Palace
        ]);

        Jugador::create([
            'file_uri' => 'edouard.png',
            'nombre' => 'Jordan',
            'apellido' => 'Ayew',
            'fecha_nac' => '1991-09-11',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 19,  // Crystal Palace
        ]);

        Jugador::create([
            'file_uri' => 'raya.png',
            'nombre' => 'David',
            'apellido' => 'Raya',
            'fecha_nac' => '1995-09-15',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 20,  // Brentford
        ]);

        Jugador::create([
            'file_uri' => 'mepham.png',
            'nombre' => 'Chris',
            'apellido' => 'Mepham',
            'fecha_nac' => '1997-10-05',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '6',
            'equipo_id' => 20,  // Brentford
        ]);

        Jugador::create([
            'file_uri' => 'jansson.png',
            'nombre' => 'Pontus',
            'apellido' => 'Jansson',
            'fecha_nac' => '1991-02-13',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '18',
            'equipo_id' => 20,  // Brentford
        ]);

        Jugador::create([
            'file_uri' => 'henry.png',
            'nombre' => 'Rico',
            'apellido' => 'Henry',
            'fecha_nac' => '1997-02-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '3',
            'equipo_id' => 20,  // Brentford
        ]);

        Jugador::create([
            'file_uri' => 'fosu.png',
            'nombre' => 'Josh',
            'apellido' => 'Fosu',
            'fecha_nac' => '1997-11-07',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '10',
            'equipo_id' => 20,  // Brentford
        ]);

        Jugador::create([
            'file_uri' => 'jensen.png',
            'nombre' => 'Mikkel',
            'apellido' => 'Jensen',
            'fecha_nac' => '1994-07-01',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '18',
            'equipo_id' => 20,  // Brentford
        ]);

        Jugador::create([
            'file_uri' => 'norgaard.png',
            'nombre' => 'Christian',
            'apellido' => 'Nørgaard',
            'fecha_nac' => '1993-12-10',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '6',
            'equipo_id' => 20,  // Brentford
        ]);

        Jugador::create([
            'file_uri' => 'toney.png',
            'nombre' => 'Ivan',
            'apellido' => 'Toney',
            'fecha_nac' => '1996-03-16',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '17',
            'equipo_id' => 20,  // Brentford
        ]);

        Jugador::create([
            'file_uri' => 'wissa.png',
            'nombre' => 'Yoane',
            'apellido' => 'Wissa',
            'fecha_nac' => '1996-08-03',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '11',
            'equipo_id' => 20,  // Brentford
        ]);

        Jugador::create([
            'file_uri' => 'schade.png',
            'nombre' => 'Kevin',
            'apellido' => 'Schade',
            'fecha_nac' => '2001-11-27',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '23',
            'equipo_id' => 20,  // Brentford
        ]);
//Serie A
        Jugador::create([
            'file_uri' => 'WojciechSzczesny.png',
            'nombre' => 'Wojciech',
            'apellido' => 'Szczęsny',
            'fecha_nac' => '1990-04-18',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'POR',
            'num_camiseta' => '1',
            'equipo_id' => 21, // 'Juventus'
        ]);

        Jugador::create([
            'file_uri' => 'MatthijsDeLigt.png',
            'nombre' => 'Matthijs',
            'apellido' => 'De Ligt',
            'fecha_nac' => '1999-08-12',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '4',
            'equipo_id' => 21, // 'Juventus'
        ]);

        Jugador::create([
            'file_uri' => 'LeonardoBonucci.png',
            'nombre' => 'Leonardo',
            'apellido' => 'Bonucci',
            'fecha_nac' => '1987-05-01',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '19',
            'equipo_id' => 21, // 'Juventus'
        ]);

        Jugador::create([
            'file_uri' => 'AlexSandro.png',
            'nombre' => 'Alex',
            'apellido' => 'Sandro',
            'fecha_nac' => '1991-01-26',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEF',
            'num_camiseta' => '12',
            'equipo_id' => 21, // 'Juventus'
        ]);

        Jugador::create([
            'file_uri' => 'JuanCuadrado.png',
            'nombre' => 'Juan',
            'apellido' => 'Cuadrado',
            'fecha_nac' => '1988-05-26',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EXT',
            'num_camiseta' => '11',
            'equipo_id' => 21, // 'Juventus'
        ]);

        Jugador::create([
            'file_uri' => 'AdrienRabiot.png',
            'nombre' => 'Adrien',
            'apellido' => 'Rabiot',
            'fecha_nac' => '1995-04-03',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '25',
            'equipo_id' => 21, // 'Juventus'
        ]);

        Jugador::create([
            'file_uri' => 'ManuelLocatelli.png',
            'nombre' => 'Manuel',
            'apellido' => 'Locatelli',
            'fecha_nac' => '1998-01-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '27',
            'equipo_id' => 21, // 'Juventus'
        ]);

        Jugador::create([
            'file_uri' => 'PauloDybala.png',
            'nombre' => 'Paulo',
            'apellido' => 'Dybala',
            'fecha_nac' => '1993-11-15',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '10',
            'equipo_id' => 21, // 'Juventus'
        ]);

        Jugador::create([
            'file_uri' => 'FedericoChiesa.png',
            'nombre' => 'Federico',
            'apellido' => 'Chiesa',
            'fecha_nac' => '1997-10-25',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EXT',
            'num_camiseta' => '22',
            'equipo_id' => 21, // 'Juventus'
        ]);

        Jugador::create([
            'file_uri' => 'DusanVlahovic.png',
            'nombre' => 'Dušan',
            'apellido' => 'Vlahović',
            'fecha_nac' => '2000-01-28',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '9',
            'equipo_id' => 21, // 'Juventus'
        ]);

        Jugador::create([
            'file_uri' => 'SamirHandanovic.png',
            'nombre' => 'Samir',
            'apellido' => 'Handanović',
            'fecha_nac' => '1984-07-14',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'POR',
            'num_camiseta' => '1',
            'equipo_id' => 22, // 'Inter de Milan'
        ]);

        Jugador::create([
            'file_uri' => 'MilanSkriniar.png',
            'nombre' => 'Milan',
            'apellido' => 'Škriniar',
            'fecha_nac' => '1995-02-11',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '37',
            'equipo_id' => 22, // 'Inter de Milan'
        ]);

        Jugador::create([
            'file_uri' => 'StefanDeVrij.png',
            'nombre' => 'Stefan',
            'apellido' => 'De Vrij',
            'fecha_nac' => '1992-02-05',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '6',
            'equipo_id' => 22, // 'Inter de Milan'
        ]);

        Jugador::create([
            'file_uri' => 'AlessandroBastoni.png',
            'nombre' => 'Alessandro',
            'apellido' => 'Bastoni',
            'fecha_nac' => '1999-04-13',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '95',
            'equipo_id' => 22, // 'Inter de Milan'
        ]);

        Jugador::create([
            'file_uri' => 'DenzelDumfries.png',
            'nombre' => 'Denzel',
            'apellido' => 'Dumfries',
            'fecha_nac' => '1996-04-18',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEF',
            'num_camiseta' => '2',
            'equipo_id' => 22, // 'Inter de Milan'
        ]);

        Jugador::create([
            'file_uri' => 'NicoloBarella.png',
            'nombre' => 'Nicolò',
            'apellido' => 'Barella',
            'fecha_nac' => '1997-02-07',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '23',
            'equipo_id' => 22, // 'Inter de Milan'
        ]);

        Jugador::create([
            'file_uri' => 'HakanCalhanoglu.png',
            'nombre' => 'Hakan',
            'apellido' => 'Çalhanoğlu',
            'fecha_nac' => '1994-02-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '20',
            'equipo_id' => 22, // 'Inter de Milan'
        ]);

        Jugador::create([
            'file_uri' => 'LautaroMartinez.png',
            'nombre' => 'Lautaro',
            'apellido' => 'Martínez',
            'fecha_nac' => '1997-08-22',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '10',
            'equipo_id' => 22, // 'Inter de Milan'
        ]);

        Jugador::create([
            'file_uri' => 'EdinDzeko.png',
            'nombre' => 'Edin',
            'apellido' => 'Džeko',
            'fecha_nac' => '1986-03-17',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '9',
            'equipo_id' => 22, // 'Inter de Milan'
        ]);

        Jugador::create([
            'file_uri' => 'RomeluLukaku.png',
            'nombre' => 'Romelu',
            'apellido' => 'Lukaku',
            'fecha_nac' => '1993-05-13',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '90',
            'equipo_id' => 22, // 'Inter de Milan'
        ]);

        Jugador::create([
            'file_uri' => 'MikeMaignan.png',
            'nombre' => 'Mike',
            'apellido' => 'Maignan',
            'fecha_nac' => '1995-07-03',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'POR',
            'num_camiseta' => '16',
            'equipo_id' => 23, // 'AC Milan'
        ]);

        Jugador::create([
            'file_uri' => 'TheoHernandez.png',
            'nombre' => 'Theo',
            'apellido' => 'Hernández',
            'fecha_nac' => '1997-10-06',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEF',
            'num_camiseta' => '19',
            'equipo_id' => 23, // 'AC Milan'
        ]);

        Jugador::create([
            'file_uri' => 'FikayoTomori.png',
            'nombre' => 'Fikayo',
            'apellido' => 'Tomori',
            'fecha_nac' => '1997-12-19',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '23',
            'equipo_id' => 23, // 'AC Milan'
        ]);

        Jugador::create([
            'file_uri' => 'AlessioRomagnoli.png',
            'nombre' => 'Alessio',
            'apellido' => 'Romagnoli',
            'fecha_nac' => '1995-01-12',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '13',
            'equipo_id' => 23, // 'AC Milan'
        ]);

        Jugador::create([
            'file_uri' => 'DavideCalabria.png',
            'nombre' => 'Davide',
            'apellido' => 'Calabria',
            'fecha_nac' => '1996-12-06',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEF',
            'num_camiseta' => '2',
            'equipo_id' => 23, // 'AC Milan'
        ]);

        Jugador::create([
            'file_uri' => 'SandroTonali.png',
            'nombre' => 'Sandro',
            'apellido' => 'Tonali',
            'fecha_nac' => '2000-05-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '8',
            'equipo_id' => 23, // 'AC Milan'
        ]);

        Jugador::create([
            'file_uri' => 'IsmaelBennacer.png',
            'nombre' => 'Ismaël',
            'apellido' => 'Bennacer',
            'fecha_nac' => '1997-12-01',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '4',
            'equipo_id' => 23, // 'AC Milan'
        ]);

        Jugador::create([
            'file_uri' => 'RafaelLeao.png',
            'nombre' => 'Rafael',
            'apellido' => 'Leão',
            'fecha_nac' => '1999-06-10',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EXT',
            'num_camiseta' => '17',
            'equipo_id' => 23, // 'AC Milan'
        ]);

        Jugador::create([
            'file_uri' => 'OlivierGiroud.png',
            'nombre' => 'Olivier',
            'apellido' => 'Giroud',
            'fecha_nac' => '1986-09-30',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '9',
            'equipo_id' => 23, // 'AC Milan'
        ]);

        Jugador::create([
            'file_uri' => 'ZlatanIbrahimovic.png',
            'nombre' => 'Zlatan',
            'apellido' => 'Ibrahimović',
            'fecha_nac' => '1981-10-03',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '11',
            'equipo_id' => 23, // 'AC Milan'
        ]);

        Jugador::create([
            'file_uri' => 'AlexMeret.png',
            'nombre' => 'Alex',
            'apellido' => 'Meret',
            'fecha_nac' => '1997-03-22',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'POR',
            'num_camiseta' => '1',
            'equipo_id' => 24, // 'Napoli'
        ]);

        Jugador::create([
            'file_uri' => 'KostasManolas.png',
            'nombre' => 'Kostas',
            'apellido' => 'Manolas',
            'fecha_nac' => '1991-06-14',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '44',
            'equipo_id' => 24, // 'Napoli'
        ]);

        Jugador::create([
            'file_uri' => 'KalidouKoulibaly.png',
            'nombre' => 'Kalidou',
            'apellido' => 'Koulibaly',
            'fecha_nac' => '1991-06-20',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '26',
            'equipo_id' => 24, // 'Napoli'
        ]);

        Jugador::create([
            'file_uri' => 'GiovanniDiLorenzo.png',
            'nombre' => 'Giovanni',
            'apellido' => 'Di Lorenzo',
            'fecha_nac' => '1993-08-04',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEF',
            'num_camiseta' => '22',
            'equipo_id' => 24, // 'Napoli'
        ]);

        Jugador::create([
            'file_uri' => 'MarioRui.png',
            'nombre' => 'Mário',
            'apellido' => 'Ruí',
            'fecha_nac' => '1991-05-27',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEF',
            'num_camiseta' => '6',
            'equipo_id' => 24, // 'Napoli'
        ]);

        Jugador::create([
            'file_uri' => 'PiotrZielinski.png',
            'nombre' => 'Piotr',
            'apellido' => 'Zieliński',
            'fecha_nac' => '1994-05-20',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '20',
            'equipo_id' => 24, // 'Napoli'
        ]);

        Jugador::create([
            'file_uri' => 'FabianRuiz.png',
            'nombre' => 'Fabián',
            'apellido' => 'Ruiz',
            'fecha_nac' => '1996-04-03',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '8',
            'equipo_id' => 24, // 'Napoli'
        ]);

        Jugador::create([
            'file_uri' => 'HirvingLozano.png',
            'nombre' => 'Hirving',
            'apellido' => 'Lozano',
            'fecha_nac' => '1995-07-30',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EXT',
            'num_camiseta' => '11',
            'equipo_id' => 24, // 'Napoli'
        ]);

        Jugador::create([
            'file_uri' => 'VictorOsimhen.png',
            'nombre' => 'Victor',
            'apellido' => 'Osimhen',
            'fecha_nac' => '1998-12-29',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '9',
            'equipo_id' => 24, // 'Napoli'
        ]);

        Jugador::create([
            'file_uri' => 'DriesMertens.png',
            'nombre' => 'Dries',
            'apellido' => 'Mertens',
            'fecha_nac' => '1987-05-06',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '14',
            'equipo_id' => 24, // 'Napoli'
        ]);

        Jugador::create([
            'file_uri' => 'RuiPatricio.png',
            'nombre' => 'Rui',
            'apellido' => 'Patrício',
            'fecha_nac' => '1988-02-15',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'POR',
            'num_camiseta' => '1',
            'equipo_id' => 25, // 'AS Roma'
        ]);

        Jugador::create([
            'file_uri' => 'ChrisSmalling.png',
            'nombre' => 'Chris',
            'apellido' => 'Smalling',
            'fecha_nac' => '1989-11-22',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '6',
            'equipo_id' => 25, // 'AS Roma'
        ]);

        Jugador::create([
            'file_uri' => 'GianlucaMancini.png',
            'nombre' => 'Gianluca',
            'apellido' => 'Mancini',
            'fecha_nac' => '1996-04-17',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '23',
            'equipo_id' => 25, // 'AS Roma'
        ]);

        Jugador::create([
            'file_uri' => 'MarashKumbulla.png',
            'nombre' => 'Marash',
            'apellido' => 'Kumbulla',
            'fecha_nac' => '2000-02-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '24',
            'equipo_id' => 25, // 'AS Roma'
        ]);

        Jugador::create([
            'file_uri' => 'RickKarsdorp.png',
            'nombre' => 'Rick',
            'apellido' => 'Karsdorp',
            'fecha_nac' => '1995-02-11',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEF',
            'num_camiseta' => '2',
            'equipo_id' => 25, // 'AS Roma'
        ]);

        Jugador::create([
            'file_uri' => 'JordanVeretout.png',
            'nombre' => 'Jordan',
            'apellido' => 'Veretout',
            'fecha_nac' => '1993-03-01',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '17',
            'equipo_id' => 25, // 'AS Roma'
        ]);

        Jugador::create([
            'file_uri' => 'LorenzoPellegrini.png',
            'nombre' => 'Lorenzo',
            'apellido' => 'Pellegrini',
            'fecha_nac' => '1996-06-19',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '7',
            'equipo_id' => 25, // 'AS Roma'
        ]);

        Jugador::create([
            'file_uri' => 'HenrikhMkhitaryan.png',
            'nombre' => 'Henrikh',
            'apellido' => 'Mkhitaryan',
            'fecha_nac' => '1989-01-21',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '77',
            'equipo_id' => 25, // 'AS Roma'
        ]);

        Jugador::create([
            'file_uri' => 'TammyAbraham.png',
            'nombre' => 'Tammy',
            'apellido' => 'Abraham',
            'fecha_nac' => '1997-10-02',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '9',
            'equipo_id' => 25, // 'AS Roma'
        ]);

        Jugador::create([
            'file_uri' => 'NicoloZaniolo.png',
            'nombre' => 'Nicolò',
            'apellido' => 'Zaniolo',
            'fecha_nac' => '1999-07-02',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EXT',
            'num_camiseta' => '22',
            'equipo_id' => 25, // 'AS Roma'
        ]);

        Jugador::create([
            'file_uri' => 'ThomasStrakosha.png',
            'nombre' => 'Thomas',
            'apellido' => 'Strakosha',
            'fecha_nac' => '1995-03-19',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'POR',
            'num_camiseta' => '1',
            'equipo_id' => 26, // 'Lazio'
        ]);

        Jugador::create([
            'file_uri' => 'FrancescoAcerbi.png',
            'nombre' => 'Francesco',
            'apellido' => 'Acerbi',
            'fecha_nac' => '1988-02-10',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '33',
            'equipo_id' => 26, // 'Lazio'
        ]);

        Jugador::create([
            'file_uri' => 'LuizFelipe.png',
            'nombre' => 'Luiz',
            'apellido' => 'Felipe',
            'fecha_nac' => '1997-03-22',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '3',
            'equipo_id' => 26, // 'Lazio'
        ]);

        Jugador::create([
            'file_uri' => 'Patricio.png',
            'nombre' => 'Patricio',
            'apellido' => 'Garrido',
            'fecha_nac' => '1993-01-23',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEF',
            'num_camiseta' => '2',
            'equipo_id' => 26, // 'Lazio'
        ]);

        Jugador::create([
            'file_uri' => 'SergejMilinkovicSavic.png',
            'nombre' => 'Sergej',
            'apellido' => 'Milinković-Savić',
            'fecha_nac' => '1995-02-27',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '21',
            'equipo_id' => 26, // 'Lazio'
        ]);

        Jugador::create([
            'file_uri' => 'LuisAlberto.png',
            'nombre' => 'Luis',
            'apellido' => 'Alberto',
            'fecha_nac' => '1992-11-28',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '10',
            'equipo_id' => 26, // 'Lazio'
        ]);

        Jugador::create([
            'file_uri' => 'CiroImmobile.png',
            'nombre' => 'Ciro',
            'apellido' => 'Immobile',
            'fecha_nac' => '1990-02-20',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '17',
            'equipo_id' => 26, // 'Lazio'
        ]);

        Jugador::create([
            'file_uri' => 'JoaquínCorrea.png',
            'nombre' => 'Joaquín',
            'apellido' => 'Correa',
            'fecha_nac' => '1994-08-13',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '11',
            'equipo_id' => 26, // 'Lazio'
        ]);

        Jugador::create([
            'file_uri' => 'VedatMuriqi.png',
            'nombre' => 'Vedat',
            'apellido' => 'Muriqi',
            'fecha_nac' => '1994-04-24',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '9',
            'equipo_id' => 26, // 'Lazio'
        ]);

        Jugador::create([
            'file_uri' => 'FelipeAnderson.png',
            'nombre' => 'Felipe',
            'apellido' => 'Anderson',
            'fecha_nac' => '1993-04-27',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EXT',
            'num_camiseta' => '7',
            'equipo_id' => 26, // 'Lazio'
        ]);

        Jugador::create([
            'file_uri' => 'JuanMusso.png',
            'nombre' => 'Juan',
            'apellido' => 'Musso',
            'fecha_nac' => '1994-05-06',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'POR',
            'num_camiseta' => '1',
            'equipo_id' => 27, // 'Atalanta'
        ]);

        Jugador::create([
            'file_uri' => 'RafaelToledo.png',
            'nombre' => 'Rafael',
            'apellido' => 'Toloi',
            'fecha_nac' => '1990-10-22',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '2',
            'equipo_id' => 27, // 'Atalanta'
        ]);

        Jugador::create([
            'file_uri' => 'GianlucaMancini.png',
            'nombre' => 'Gianluca',
            'apellido' => 'Mancini',
            'fecha_nac' => '1996-04-17',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '28',
            'equipo_id' => 27, // 'Atalanta'
        ]);

        Jugador::create([
            'file_uri' => 'BeratDjimsiti.png',
            'nombre' => 'Berat',
            'apellido' => 'Djimsiti',
            'fecha_nac' => '1993-01-19',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '19',
            'equipo_id' => 27, // 'Atalanta'
        ]);

        Jugador::create([
            'file_uri' => 'RobinGosens.png',
            'nombre' => 'Robin',
            'apellido' => 'Gosens',
            'fecha_nac' => '1994-07-05',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEF',
            'num_camiseta' => '8',
            'equipo_id' => 27, // 'Atalanta'
        ]);

        Jugador::create([
            'file_uri' => 'RemoFreuler.png',
            'nombre' => 'Remo',
            'apellido' => 'Freuler',
            'fecha_nac' => '1992-04-15',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '11',
            'equipo_id' => 27, // 'Atalanta'
        ]);

        Jugador::create([
            'file_uri' => 'MarioPasalic.png',
            'nombre' => 'Mario',
            'apellido' => 'Pašalić',
            'fecha_nac' => '1995-02-09',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '88',
            'equipo_id' => 27, // 'Atalanta'
        ]);

        Jugador::create([
            'file_uri' => 'LuisMuriel.png',
            'nombre' => 'Luis',
            'apellido' => 'Muriel',
            'fecha_nac' => '1991-04-16',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '9',
            'equipo_id' => 27, // 'Atalanta'
        ]);

        Jugador::create([
            'file_uri' => 'DuvanZapata.png',
            'nombre' => 'Duván',
            'apellido' => 'Zapata',
            'fecha_nac' => '1991-04-01',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '91',
            'equipo_id' => 27, // 'Atalanta'
        ]);

        Jugador::create([
            'file_uri' => 'JosipIlicic.png',
            'nombre' => 'Josip',
            'apellido' => 'Iličić',
            'fecha_nac' => '1988-01-29',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '72',
            'equipo_id' => 27, // 'Atalanta'
        ]);

        Jugador::create([
            'file_uri' => 'PietroTerracciano.png',
            'nombre' => 'Pietro',
            'apellido' => 'Terracciano',
            'fecha_nac' => '1990-04-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'POR',
            'num_camiseta' => '1',
            'equipo_id' => 28, // 'Fiorentina'
        ]);

        Jugador::create([
            'file_uri' => 'AlessandroMilenkovic.png',
            'nombre' => 'Alessandro',
            'apellido' => 'Milenković',
            'fecha_nac' => '1997-10-22',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '4',
            'equipo_id' => 28, // 'Fiorentina'
        ]);

        Jugador::create([
            'file_uri' => 'NikolaMilenkovic.png',
            'nombre' => 'Nikola',
            'apellido' => 'Milenković',
            'fecha_nac' => '1997-10-12',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '4',
            'equipo_id' => 28, // 'Fiorentina'
        ]);

        Jugador::create([
            'file_uri' => 'GermánPezzella.png',
            'nombre' => 'Germán',
            'apellido' => 'Pezzella',
            'fecha_nac' => '1991-06-27',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '5',
            'equipo_id' => 28, // 'Fiorentina'
        ]);

        Jugador::create([
            'file_uri' => 'CristianoBiraghi.png',
            'nombre' => 'Cristiano',
            'apellido' => 'Biraghi',
            'fecha_nac' => '1992-09-01',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEF',
            'num_camiseta' => '3',
            'equipo_id' => 28, // 'Fiorentina'
        ]);

        Jugador::create([
            'file_uri' => 'GaetanoCastrovilli.png',
            'nombre' => 'Gaetano',
            'apellido' => 'Castrovilli',
            'fecha_nac' => '1997-02-17',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '8',
            'equipo_id' => 28, // 'Fiorentina'
        ]);

        Jugador::create([
            'file_uri' => 'SofyanAmrabat.png',
            'nombre' => 'Sofyan',
            'apellido' => 'Amrabat',
            'fecha_nac' => '1996-08-21',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '34',
            'equipo_id' => 28, // 'Fiorentina'
        ]);

        Jugador::create([
            'file_uri' => 'LuisMuriel.png',
            'nombre' => 'Luis',
            'apellido' => 'Muriel',
            'fecha_nac' => '1991-04-16',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '9',
            'equipo_id' => 28, // 'Fiorentina'
        ]);

        Jugador::create([
            'file_uri' => 'DusanVlahovic.png',
            'nombre' => 'Dušan',
            'apellido' => 'Vlahović',
            'fecha_nac' => '2000-01-28',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '9',
            'equipo_id' => 28, // 'Fiorentina'
        ]);

        Jugador::create([
            'file_uri' => 'JonathanIkoné.png',
            'nombre' => 'Jonathan',
            'apellido' => 'Ikoné',
            'fecha_nac' => '1998-01-23',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EXT',
            'num_camiseta' => '10',
            'equipo_id' => 28, // 'Fiorentina'
        ]);

        Jugador::create([
            'file_uri' => 'MarcoSilvestri.png',
            'nombre' => 'Marco',
            'apellido' => 'Silvestri',
            'fecha_nac' => '1991-03-02',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'POR',
            'num_camiseta' => '1',
            'equipo_id' => 29, // 'Udinese'
        ]);

        Jugador::create([
            'file_uri' => 'RodrigoBecão.png',
            'nombre' => 'Rodrigo',
            'apellido' => 'Becão',
            'fecha_nac' => '1996-08-10',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '6',
            'equipo_id' => 29, // 'Udinese'
        ]);

        Jugador::create([
            'file_uri' => 'AdamMasina.png',
            'nombre' => 'Adam',
            'apellido' => 'Masina',
            'fecha_nac' => '1994-01-02',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEF',
            'num_camiseta' => '5',
            'equipo_id' => 29, // 'Udinese'
        ]);

        Jugador::create([
            'file_uri' => 'NahuelMolina.png',
            'nombre' => 'Nahuel',
            'apellido' => 'Molina',
            'fecha_nac' => '1998-04-06',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEF',
            'num_camiseta' => '16',
            'equipo_id' => 29, // 'Udinese'
        ]);

        Jugador::create([
            'file_uri' => 'JakaBijol.png',
            'nombre' => 'Jaka',
            'apellido' => 'Bijol',
            'fecha_nac' => '1998-09-20',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '88',
            'equipo_id' => 29, // 'Udinese'
        ]);

        Jugador::create([
            'file_uri' => 'Walace.png',
            'nombre' => 'Walace',
            'apellido' => 'Oliveira dos Santos',
            'fecha_nac' => '1994-09-02',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '7',
            'equipo_id' => 29, // 'Udinese'
        ]);

        Jugador::create([
            'file_uri' => 'RobertoPereyra.png',
            'nombre' => 'Roberto',
            'apellido' => 'Pereyra',
            'fecha_nac' => '1991-01-07',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '37',
            'equipo_id' => 29, // 'Udinese'
        ]);

        Jugador::create([
            'file_uri' => 'GerardDeulofeu.png',
            'nombre' => 'Gerard',
            'apellido' => 'Deulofeu',
            'fecha_nac' => '1994-03-13',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '10',
            'equipo_id' => 29, // 'Udinese'
        ]);

        Jugador::create([
            'file_uri' => 'Beto.png',
            'nombre' => 'Beto',
            'apellido' => 'de Morais',
            'fecha_nac' => '1999-05-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '9',
            'equipo_id' => 29, // 'Udinese'
        ]);

        Jugador::create([
            'file_uri' => 'IsaacSuccess.png',
            'nombre' => 'Isaac',
            'apellido' => 'Success',
            'fecha_nac' => '1996-10-07',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '10',
            'equipo_id' => 29, // 'Udinese'
        ]);

        Jugador::create([
            'file_uri' => 'VanjaMilinkovicSavic.png',
            'nombre' => 'Vanja',
            'apellido' => 'Milinković-Savić',
            'fecha_nac' => '1997-02-20',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'POR',
            'num_camiseta' => '1',
            'equipo_id' => 30, // 'Torino'
        ]);

        Jugador::create([
            'file_uri' => 'GleisonBremmer.png',
            'nombre' => 'Gleison',
            'apellido' => 'Bremmer',
            'fecha_nac' => '1997-03-18',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '3',
            'equipo_id' => 30, // 'Torino'
        ]);

        Jugador::create([
            'file_uri' => 'ArmandoIzzo.png',
            'nombre' => 'Armando',
            'apellido' => 'Izzo',
            'fecha_nac' => '1992-03-02',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '5',
            'equipo_id' => 30, // 'Torino'
        ]);

        Jugador::create([
            'file_uri' => 'WilfriedSingo.png',
            'nombre' => 'Wilfried',
            'apellido' => 'Singo',
            'fecha_nac' => '2000-05-12',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEF',
            'num_camiseta' => '17',
            'equipo_id' => 30, // 'Torino'
        ]);

        Jugador::create([
            'file_uri' => 'RicardoRodriguez.png',
            'nombre' => 'Ricardo',
            'apellido' => 'Rodríguez',
            'fecha_nac' => '1992-08-25',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEF',
            'num_camiseta' => '13',
            'equipo_id' => 30, // 'Torino'
        ]);

        Jugador::create([
            'file_uri' => 'TommasoPobega.png',
            'nombre' => 'Tommaso',
            'apellido' => 'Pobega',
            'fecha_nac' => '1999-07-15',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '4',
            'equipo_id' => 30, // 'Torino'
        ]);

        Jugador::create([
            'file_uri' => 'KarolLinetty.png',
            'nombre' => 'Karol',
            'apellido' => 'Linetty',
            'fecha_nac' => '1997-02-02',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '8',
            'equipo_id' => 30, // 'Torino'
        ]);

        Jugador::create([
            'file_uri' => 'JosipBrekalo.png',
            'nombre' => 'Josip',
            'apellido' => 'Brekalo',
            'fecha_nac' => '1998-06-23',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'EXT',
            'num_camiseta' => '7',
            'equipo_id' => 30, // 'Torino'
        ]);

        Jugador::create([
            'file_uri' => 'AntonioSanabria.png',
            'nombre' => 'Antonio',
            'apellido' => 'Sanabria',
            'fecha_nac' => '1996-03-04',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '9',
            'equipo_id' => 30, // 'Torino'
        ]);

        Jugador::create([
            'file_uri' => 'PabloRodriguez.png',
            'nombre' => 'Pablo',
            'apellido' => 'Rodríguez',
            'fecha_nac' => '2001-05-23',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DEL',
            'num_camiseta' => '11',
            'equipo_id' => 30, // 'Torino'
        ]);
//Campeonato Uruguayo
        Jugador::create([
            'file_uri' => 'WashingtonAguerre.png',
            'nombre' => 'Washington',
            'apellido' => 'Aguerre',
            'fecha_nac' => '1992-03-10',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 31, // 'Peñarol'
        ]);

        Jugador::create([
            'file_uri' => 'LéoCoelho.png',
            'nombre' => 'Léo',
            'apellido' => 'Coelho',
            'fecha_nac' => '1993-05-15',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '2',
            'equipo_id' => 31, // 'Peñarol'
        ]);

        Jugador::create([
            'file_uri' => 'GuzmánRodríguez.png',
            'nombre' => 'Guzmán',
            'apellido' => 'Rodríguez',
            'fecha_nac' => '1999-07-15',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '4',
            'equipo_id' => 31, // 'Peñarol'
        ]);

        Jugador::create([
            'file_uri' => 'MaximilianoOlivera.png',
            'nombre' => 'Maximiliano',
            'apellido' => 'Olivera',
            'fecha_nac' => '1992-03-10',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'LI',
            'num_camiseta' => '15',
            'equipo_id' => 31, // 'Peñarol'
        ]);

        Jugador::create([
            'file_uri' => 'LeoFernández.png',
            'nombre' => 'Leo',
            'apellido' => 'Fernández',
            'fecha_nac' => '1998-11-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MCO',
            'num_camiseta' => '10',
            'equipo_id' => 31, // 'Peñarol'
        ]);

        Jugador::create([
            'file_uri' => 'PedroMilans.png',
            'nombre' => 'Pedro',
            'apellido' => 'Milans',
            'fecha_nac' => '2002-01-01',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'LD',
            'num_camiseta' => '20',
            'equipo_id' => 31, // 'Peñarol'
        ]);

        Jugador::create([
            'file_uri' => 'CamiloMayada.png',
            'nombre' => 'Camilo',
            'apellido' => 'Mayada',
            'fecha_nac' => '1990-03-15',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'LD',
            'num_camiseta' => '18',
            'equipo_id' => 31, // 'Peñarol'
        ]);

        Jugador::create([
            'file_uri' => 'IgnacioSosa.png',
            'nombre' => 'Ignacio',
            'apellido' => 'Sosa',
            'fecha_nac' => '2002-01-01',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '25',
            'equipo_id' => 31, // 'Peñarol'
        ]);

        Jugador::create([
            'file_uri' => 'JavierMéndez.png',
            'nombre' => 'Javier',
            'apellido' => 'Méndez',
            'fecha_nac' => '1993-01-01',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '23',
            'equipo_id' => 31, // 'Peñarol'
        ]);

        Jugador::create([
            'file_uri' => 'MaximilianoSilvera.png',
            'nombre' => 'Maximiliano',
            'apellido' => 'Silvera',
            'fecha_nac' => '1997-09-05',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '11',
            'equipo_id' => 31, // 'Peñarol'
        ]);

        Jugador::create([
            'file_uri' => 'SergioRochet.png',
            'nombre' => 'Sergio',
            'apellido' => 'Rochet',
            'fecha_nac' => '1993-03-25',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '22',
            'equipo_id' => 32, // 'Nacional'
        ]);

        Jugador::create([
            'file_uri' => 'LuisMejia.png',
            'nombre' => 'Luis',
            'apellido' => 'Mejia',
            'fecha_nac' => '1991-03-16',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 32, // 'Nacional'
        ]);

        Jugador::create([
            'file_uri' => 'EmilianoMartínez.png',
            'nombre' => 'Emiliano',
            'apellido' => 'Martínez',
            'fecha_nac' => '1992-02-15',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '3',
            'equipo_id' => 32, // 'Nacional'
        ]);

        Jugador::create([
            'file_uri' => 'MauricioPereira.png',
            'nombre' => 'Mauricio',
            'apellido' => 'Pereira',
            'fecha_nac' => '1990-03-15',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MCO',
            'num_camiseta' => '10',
            'equipo_id' => 32, // 'Nacional'
        ]);

        Jugador::create([
            'file_uri' => 'DiegoPolenta.png',
            'nombre' => 'Diego',
            'apellido' => 'Polenta',
            'fecha_nac' => '1992-09-19',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '6',
            'equipo_id' => 32, // 'Nacional'
        ]);

        Jugador::create([
            'file_uri' => 'NicolásRodríguez.png',
            'nombre' => 'Nicolás',
            'apellido' => 'Rodríguez',
            'fecha_nac' => '1991-06-2',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '5',
            'equipo_id' => 32, // 'Nacional'
        ]);

        Jugador::create([
            'file_uri' => 'CarlosAuzqui.png',
            'nombre' => 'Carlos',
            'apellido' => 'Auzqui',
            'fecha_nac' => '1993-07-30',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'ED',
            'num_camiseta' => '7',
            'equipo_id' => 32, // 'Nacional'
        ]);

        Jugador::create([
            'file_uri' => 'GonzaloFucile.png',
            'nombre' => 'Gonzalo',
            'apellido' => 'Fucile',
            'fecha_nac' => '1987-11-16',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'LD',
            'num_camiseta' => '4',
            'equipo_id' => 32, // 'Nacional'
        ]);

        Jugador::create([
            'file_uri' => 'NicolasLopez.png',
            'nombre' => 'Nicolás',
            'apellido' => 'López',
            'fecha_nac' => '1993-10-01',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '8',
            'equipo_id' => 32, // 'Nacional'
        ]);

        Jugador::create([
            'file_uri' => 'SantiagoBergessio.png',
            'nombre' => 'Santiago',
            'apellido' => 'Bergessio',
            'fecha_nac' => '1984-06-20',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 32, // 'Nacional'
        ]);

        Jugador::create([
            'file_uri' => 'GuillermoDeAmoresCerro.png',
            'nombre' => 'Guillermo',
            'apellido' => 'De Amores',
            'fecha_nac' => '1994-01-01',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '12',
            'equipo_id' => 33, // 'Cerro'
        ]);

        Jugador::create([
            'file_uri' => 'SebastiánFuentes.png',
            'nombre' => 'Sebastián',
            'apellido' => 'Fuentes',
            'fecha_nac' => '1992-05-18',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 33, // 'Cerro'
        ]);

        Jugador::create([
            'file_uri' => 'JuanMarrero.png',
            'nombre' => 'Juan',
            'apellido' => 'Marrero',
            'fecha_nac' => '1993-04-22',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '5',
            'equipo_id' => 33, // 'Cerro'
        ]);

        Jugador::create([
            'file_uri' => 'CarlosSánchezCerro.png',
            'nombre' => 'Carlos',
            'apellido' => 'Sánchez',
            'fecha_nac' => '1994-11-11',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '6',
            'equipo_id' => 33, // 'Cerro'
        ]);

        Jugador::create([
            'file_uri' => 'LucasLópezCerro.png',
            'nombre' => 'Lucas',
            'apellido' => 'López',
            'fecha_nac' => '1991-07-20',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'LI',
            'num_camiseta' => '3',
            'equipo_id' => 33, // 'Cerro'
        ]);

        Jugador::create([
            'file_uri' => 'EmilianoGonzález.png',
            'nombre' => 'Emiliano',
            'apellido' => 'González',
            'fecha_nac' => '1992-10-05',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '7',
            'equipo_id' => 33, // 'Cerro'
        ]);

        Jugador::create([
            'file_uri' => 'NicolásRodríguez.png',
            'nombre' => 'Nicolás',
            'apellido' => 'Rodríguez',
            'fecha_nac' => '1994-06-30',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '8',
            'equipo_id' => 33, // 'Cerro'
        ]);

        Jugador::create([
            'file_uri' => 'ManuelGonzálezCerro.png',
            'nombre' => 'Manuel',
            'apellido' => 'González',
            'fecha_nac' => '1995-12-14',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 33, // 'Cerro'
        ]);

        Jugador::create([
            'file_uri' => 'AlvaroFernández.png',
            'nombre' => 'Álvaro',
            'apellido' => 'Fernández',
            'fecha_nac' => '1996-02-18',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '10',
            'equipo_id' => 33, // 'Cerro'
        ]);

        Jugador::create([
            'file_uri' => 'DiegoSuárez.png',
            'nombre' => 'Diego',
            'apellido' => 'Suárez',
            'fecha_nac' => '1993-09-23',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '11',
            'equipo_id' => 33, // 'Cerro'
        ]);

        Jugador::create([
            'file_uri' => 'DiegoBorges.png',
            'nombre' => 'Diego',
            'apellido' => 'Borges',
            'fecha_nac' => '1990-02-14',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 34, // 'Boston River'
        ]);

        Jugador::create([
            'file_uri' => 'MartínMendez.png',
            'nombre' => 'Martín',
            'apellido' => 'Méndez',
            'fecha_nac' => '1993-03-11',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '12',
            'equipo_id' => 34, // 'Boston River'
        ]);

        Jugador::create([
            'file_uri' => 'SantiagoAmaral.png',
            'nombre' => 'Santiago',
            'apellido' => 'Amaral',
            'fecha_nac' => '1992-04-22',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '4',
            'equipo_id' => 34, // 'Boston River'
        ]);

        Jugador::create([
            'file_uri' => 'AlejandroPérez.png',
            'nombre' => 'Alejandro',
            'apellido' => 'Pérez',
            'fecha_nac' => '1990-06-10',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '3',
            'equipo_id' => 34, // 'Boston River'
        ]);

        Jugador::create([
            'file_uri' => 'JoaquínMíguez.png',
            'nombre' => 'Joaquín',
            'apellido' => 'Míguez',
            'fecha_nac' => '1991-07-13',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'LI',
            'num_camiseta' => '6',
            'equipo_id' => 34, // 'Boston River'
        ]);

        Jugador::create([
            'file_uri' => 'CarlosSánchezB.png',
            'nombre' => 'Carlos',
            'apellido' => 'Sánchez',
            'fecha_nac' => '1994-10-19',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '8',
            'equipo_id' => 34, // 'Boston River'
        ]);

        Jugador::create([
            'file_uri' => 'FedericoVarela.png',
            'nombre' => 'Federico',
            'apellido' => 'Varela',
            'fecha_nac' => '1993-05-30',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '10',
            'equipo_id' => 34, // 'Boston River'
        ]);

        Jugador::create([
            'file_uri' => 'RicardoGonzález.png',
            'nombre' => 'Ricardo',
            'apellido' => 'González',
            'fecha_nac' => '1994-08-23',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '7',
            'equipo_id' => 34, // 'Boston River'
        ]);

        Jugador::create([
            'file_uri' => 'JoséLuisGómez.png',
            'nombre' => 'José Luis',
            'apellido' => 'Gómez',
            'fecha_nac' => '1996-04-15',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 34, // 'Boston River'
        ]);

        Jugador::create([
            'file_uri' => 'JoséAlvarez.png',
            'nombre' => 'José',
            'apellido' => 'Álvarez',
            'fecha_nac' => '1991-09-28',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '11',
            'equipo_id' => 34, // 'Boston River'
        ]);

        Jugador::create([
            'file_uri' => 'NicolásDíazProgreso.png',
            'nombre' => 'Nicolás',
            'apellido' => 'Díaz',
            'fecha_nac' => '1991-06-24',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 35, // 'Progreso'
        ]);

        Jugador::create([
            'file_uri' => 'HéctorRodríguezProgreso.png',
            'nombre' => 'Héctor',
            'apellido' => 'Rodríguez',
            'fecha_nac' => '1990-08-12',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '22',
            'equipo_id' => 35, // 'Progreso'
        ]);

        Jugador::create([
            'file_uri' => 'DiegoReyesProgreso.png',
            'nombre' => 'Diego',
            'apellido' => 'Reyes',
            'fecha_nac' => '1992-03-15',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '4',
            'equipo_id' => 35, // 'Progreso'
        ]);

        Jugador::create([
            'file_uri' => 'JorgeBenítezProgreso.png',
            'nombre' => 'Jorge',
            'apellido' => 'Benítez',
            'fecha_nac' => '1993-10-21',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '3',
            'equipo_id' => 35, // 'Progreso'
        ]);

        Jugador::create([
            'file_uri' => 'LuisFernándezProgreso.png',
            'nombre' => 'Luis',
            'apellido' => 'Fernández',
            'fecha_nac' => '1994-05-10',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'LI',
            'num_camiseta' => '6',
            'equipo_id' => 35, // 'Progreso'
        ]);

        Jugador::create([
            'file_uri' => 'PabloGonzálezProgreso.png',
            'nombre' => 'Pablo',
            'apellido' => 'González',
            'fecha_nac' => '1993-01-05',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '8',
            'equipo_id' => 35, // 'Progreso'
        ]);

        Jugador::create([
            'file_uri' => 'CarlosJiménezProgreso.png',
            'nombre' => 'Carlos',
            'apellido' => 'Jiménez',
            'fecha_nac' => '1994-12-17',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '5',
            'equipo_id' => 35, // 'Progreso'
        ]);

        Jugador::create([
            'file_uri' => 'JoséMartínezProgreso.png',
            'nombre' => 'José',
            'apellido' => 'Martínez',
            'fecha_nac' => '1992-11-28',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 35, // 'Progreso'
        ]);

        Jugador::create([
            'file_uri' => 'FranciscoLópezProgreso.png',
            'nombre' => 'Francisco',
            'apellido' => 'López',
            'fecha_nac' => '1991-02-10',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '11',
            'equipo_id' => 35, // 'Progreso'
        ]);

        Jugador::create([
            'file_uri' => 'JuanPérezProgreso.png',
            'nombre' => 'Juan',
            'apellido' => 'Pérez',
            'fecha_nac' => '1990-04-18',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '10',
            'equipo_id' => 35, // 'Progreso'
        ]);

        Jugador::create([
            'file_uri' => 'LuisGonzálezDanubio.png',
            'nombre' => 'Luis',
            'apellido' => 'González',
            'fecha_nac' => '1990-01-21',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 36, // 'Danubio'
        ]);

        Jugador::create([
            'file_uri' => 'FrancoToralDanubio.png',
            'nombre' => 'Franco',
            'apellido' => 'Toral',
            'fecha_nac' => '1992-06-14',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '22',
            'equipo_id' => 36, // 'Danubio'
        ]);

        Jugador::create([
            'file_uri' => 'DavidCáceresDanubio.png',
            'nombre' => 'David',
            'apellido' => 'Cáceres',
            'fecha_nac' => '1993-05-28',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '4',
            'equipo_id' => 36, // 'Danubio'
        ]);

        Jugador::create([
            'file_uri' => 'EduardoPereiraDanubio.png',
            'nombre' => 'Eduardo',
            'apellido' => 'Pereira',
            'fecha_nac' => '1991-03-18',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '3',
            'equipo_id' => 36, // 'Danubio'
        ]);

        Jugador::create([
            'file_uri' => 'CarlosRuízDanubio.png',
            'nombre' => 'Carlos',
            'apellido' => 'Ruíz',
            'fecha_nac' => '1994-07-25',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'LI',
            'num_camiseta' => '6',
            'equipo_id' => 36, // 'Danubio'
        ]);

        Jugador::create([
            'file_uri' => 'MiguelÁlvarezDanubio.png',
            'nombre' => 'Miguel',
            'apellido' => 'Álvarez',
            'fecha_nac' => '1990-11-03',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '8',
            'equipo_id' => 36, // 'Danubio'
        ]);

        Jugador::create([
            'file_uri' => 'JuanJoséSánchezDanubio.png',
            'nombre' => 'Juan José',
            'apellido' => 'Sánchez',
            'fecha_nac' => '1992-04-17',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '7',
            'equipo_id' => 36, // 'Danubio'
        ]);

        Jugador::create([
            'file_uri' => 'MartínGómezDanubio.png',
            'nombre' => 'Martín',
            'apellido' => 'Gómez',
            'fecha_nac' => '1994-09-11',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 36, // 'Danubio'
        ]);

        Jugador::create([
            'file_uri' => 'CarlosSuárezDanubio.png',
            'nombre' => 'Carlos',
            'apellido' => 'Suárez',
            'fecha_nac' => '1995-01-19',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '10',
            'equipo_id' => 36, // 'Danubio'
        ]);

        Jugador::create([
            'file_uri' => 'JavierMartínezDanubio.png',
            'nombre' => 'Javier',
            'apellido' => 'Martínez',
            'fecha_nac' => '1993-07-29',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '11',
            'equipo_id' => 36, // 'Danubio'
        ]);

        Jugador::create([
            'file_uri' => 'RenéBaptistaDefensorSporting.png',
            'nombre' => 'René',
            'apellido' => 'Baptista',
            'fecha_nac' => '1991-02-09',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 37, // 'Defensor Sporting'
        ]);

        Jugador::create([
            'file_uri' => 'GerónimoSuárezDefensorSporting.png',
            'nombre' => 'Gerónimo',
            'apellido' => 'Suárez',
            'fecha_nac' => '1992-03-25',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '12',
            'equipo_id' => 37, // 'Defensor Sporting'
        ]);

        Jugador::create([
            'file_uri' => 'LeonardoÁlvarezDefensorSporting.png',
            'nombre' => 'Leonardo',
            'apellido' => 'Álvarez',
            'fecha_nac' => '1991-11-17',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '4',
            'equipo_id' => 37, // 'Defensor Sporting'
        ]);

        Jugador::create([
            'file_uri' => 'FacundoOlivaDefensorSporting.png',
            'nombre' => 'Facundo',
            'apellido' => 'Oliva',
            'fecha_nac' => '1993-02-15',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '3',
            'equipo_id' => 37, // 'Defensor Sporting'
        ]);

        Jugador::create([
            'file_uri' => 'JuanPabloGómezDefensorSporting.png',
            'nombre' => 'Juan Pablo',
            'apellido' => 'Gómez',
            'fecha_nac' => '1994-06-09',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'LI',
            'num_camiseta' => '6',
            'equipo_id' => 37, // 'Defensor Sporting'
        ]);

        Jugador::create([
            'file_uri' => 'PabloGonzálezDefensorSporting.png',
            'nombre' => 'Pablo',
            'apellido' => 'González',
            'fecha_nac' => '1994-09-10',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '8',
            'equipo_id' => 37, // 'Defensor Sporting'
        ]);

        Jugador::create([
            'file_uri' => 'JoaquínSánchezDefensorSporting.png',
            'nombre' => 'Joaquín',
            'apellido' => 'Sánchez',
            'fecha_nac' => '1991-08-05',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '7',
            'equipo_id' => 37, // 'Defensor Sporting'
        ]);

        Jugador::create([
            'file_uri' => 'CarlosSerranoDefensorSporting.png',
            'nombre' => 'Carlos',
            'apellido' => 'Serrano',
            'fecha_nac' => '1993-11-22',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 37, // 'Defensor Sporting'
        ]);

        Jugador::create([
            'file_uri' => 'FedericoRamírezDefensorSporting.png',
            'nombre' => 'Federico',
            'apellido' => 'Ramírez',
            'fecha_nac' => '1992-04-13',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '10',
            'equipo_id' => 37, // 'Defensor Sporting'
        ]);

        Jugador::create([
            'file_uri' => 'JuanMartínezDefensorSporting.png',
            'nombre' => 'Juan',
            'apellido' => 'Martínez',
            'fecha_nac' => '1990-07-09',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '11',
            'equipo_id' => 37, // 'Defensor Sporting'
        ]);

        Jugador::create([
            'file_uri' => 'JoséRodríguezRiverPlate.png',
            'nombre' => 'José',
            'apellido' => 'Rodríguez',
            'fecha_nac' => '1991-01-10',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 38, // 'River Plate'
        ]);

        Jugador::create([
            'file_uri' => 'CarlosGonzálezRiverPlate.png',
            'nombre' => 'Carlos',
            'apellido' => 'González',
            'fecha_nac' => '1993-04-21',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '12',
            'equipo_id' => 38, // 'River Plate'
        ]);

        Jugador::create([
            'file_uri' => 'MartínLópezRiverPlate.png',
            'nombre' => 'Martín',
            'apellido' => 'López',
            'fecha_nac' => '1992-11-12',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '4',
            'equipo_id' => 38, // 'River Plate'
        ]);

        Jugador::create([
            'file_uri' => 'FedericoPérezRiverPlate.png',
            'nombre' => 'Federico',
            'apellido' => 'Pérez',
            'fecha_nac' => '1994-03-07',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '5',
            'equipo_id' => 38, // 'River Plate'
        ]);

        Jugador::create([
            'file_uri' => 'JavierSánchezRiverPlate.png',
            'nombre' => 'Javier',
            'apellido' => 'Sánchez',
            'fecha_nac' => '1993-02-05',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'LI',
            'num_camiseta' => '6',
            'equipo_id' => 38, // 'River Plate'
        ]);

        Jugador::create([
            'file_uri' => 'MauricioHernándezRiverPlate.png',
            'nombre' => 'Mauricio',
            'apellido' => 'Hernández',
            'fecha_nac' => '1992-07-30',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '8',
            'equipo_id' => 38, // 'River Plate'
        ]);

        Jugador::create([
            'file_uri' => 'LucasRamírezRiverPlate.png',
            'nombre' => 'Lucas',
            'apellido' => 'Ramírez',
            'fecha_nac' => '1990-11-01',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '7',
            'equipo_id' => 38, // 'River Plate'
        ]);

        Jugador::create([
            'file_uri' => 'RodrigoGómezRiverPlate.png',
            'nombre' => 'Rodrigo',
            'apellido' => 'Gómez',
            'fecha_nac' => '1992-12-18',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 38, // 'River Plate'
        ]);

        Jugador::create([
            'file_uri' => 'AlejandroLópezRiverPlate.png',
            'nombre' => 'Alejandro',
            'apellido' => 'López',
            'fecha_nac' => '1994-01-28',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '10',
            'equipo_id' => 38, // 'River Plate'
        ]);

        Jugador::create([
            'file_uri' => 'CarlosMartínezRiverPlate.png',
            'nombre' => 'Carlos',
            'apellido' => 'Martínez',
            'fecha_nac' => '1993-09-14',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '11',
            'equipo_id' => 38, // 'River Plate'
        ]);

        Jugador::create([
            'file_uri' => 'DamiánGonzálezMontevideoCityTorque.png',
            'nombre' => 'Damián',
            'apellido' => 'González',
            'fecha_nac' => '1992-05-21',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 39, // 'Montevideo City Torque'
        ]);

        Jugador::create([
            'file_uri' => 'NicolásRodríguezMontevideoCityTorque.png',
            'nombre' => 'Nicolás',
            'apellido' => 'Rodríguez',
            'fecha_nac' => '1993-06-18',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '12',
            'equipo_id' => 39, // 'Montevideo City Torque'
        ]);

        Jugador::create([
            'file_uri' => 'ÁlvaroSuárezMontevideoCityTorque.png',
            'nombre' => 'Álvaro',
            'apellido' => 'Suárez',
            'fecha_nac' => '1991-09-14',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '4',
            'equipo_id' => 39, // 'Montevideo City Torque'
        ]);

        Jugador::create([
            'file_uri' => 'CarlosMéndezMontevideoCityTorque.png',
            'nombre' => 'Carlos',
            'apellido' => 'Méndez',
            'fecha_nac' => '1992-08-29',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '5',
            'equipo_id' => 39, // 'Montevideo City Torque'
        ]);

        Jugador::create([
            'file_uri' => 'MartínDíazMontevideoCityTorque.png',
            'nombre' => 'Martín',
            'apellido' => 'Díaz',
            'fecha_nac' => '1993-11-02',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'LI',
            'num_camiseta' => '6',
            'equipo_id' => 39, // 'Montevideo City Torque'
        ]);

        Jugador::create([
            'file_uri' => 'FedericoDíazMontevideoCityTorque.png',
            'nombre' => 'Federico',
            'apellido' => 'Díaz',
            'fecha_nac' => '1992-04-13',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '8',
            'equipo_id' => 39, // 'Montevideo City Torque'
        ]);

        Jugador::create([
            'file_uri' => 'JoaquínRamírezMontevideoCityTorque.png',
            'nombre' => 'Joaquín',
            'apellido' => 'Ramírez',
            'fecha_nac' => '1991-07-19',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '7',
            'equipo_id' => 39, // 'Montevideo City Torque'
        ]);

        Jugador::create([
            'file_uri' => 'SantiagoHernándezMontevideoCityTorque.png',
            'nombre' => 'Santiago',
            'apellido' => 'Hernández',
            'fecha_nac' => '1993-01-08',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 39, // 'Montevideo City Torque'
        ]);

        Jugador::create([
            'file_uri' => 'GonzaloSosaMontevideoCityTorque.png',
            'nombre' => 'Gonzalo',
            'apellido' => 'Sosa',
            'fecha_nac' => '1994-12-20',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '10',
            'equipo_id' => 39, // 'Montevideo City Torque'
        ]);

        Jugador::create([
            'file_uri' => 'RodrigoLópezMontevideoCityTorque.png',
            'nombre' => 'Rodrigo',
            'apellido' => 'López',
            'fecha_nac' => '1993-03-15',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '11',
            'equipo_id' => 39, // 'Montevideo City Torque'
        ]);

        Jugador::create([
            'file_uri' => 'GonzaloGutiérrezWanderers.png',
            'nombre' => 'Gonzalo',
            'apellido' => 'Gutiérrez',
            'fecha_nac' => '1991-03-22',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '1',
            'equipo_id' => 40, // 'Wanderers'
        ]);

        Jugador::create([
            'file_uri' => 'EnzoLópezWanderers.png',
            'nombre' => 'Enzo',
            'apellido' => 'López',
            'fecha_nac' => '1993-06-05',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'PO',
            'num_camiseta' => '12',
            'equipo_id' => 40, // 'Wanderers'
        ]);

        Jugador::create([
            'file_uri' => 'HéctorRamírezWanderers.png',
            'nombre' => 'Héctor',
            'apellido' => 'Ramírez',
            'fecha_nac' => '1992-07-16',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '4',
            'equipo_id' => 40, // 'Wanderers'
        ]);

        Jugador::create([
            'file_uri' => 'FedericoGonzálezWanderers.png',
            'nombre' => 'Federico',
            'apellido' => 'González',
            'fecha_nac' => '1993-05-09',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DFC',
            'num_camiseta' => '5',
            'equipo_id' => 40, // 'Wanderers'
        ]);

        Jugador::create([
            'file_uri' => 'JavierPérezWanderers.png',
            'nombre' => 'Javier',
            'apellido' => 'Pérez',
            'fecha_nac' => '1993-11-21',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'LI',
            'num_camiseta' => '6',
            'equipo_id' => 40, // 'Wanderers'
        ]);

        Jugador::create([
            'file_uri' => 'LucasRodríguezWanderers.png',
            'nombre' => 'Lucas',
            'apellido' => 'Rodríguez',
            'fecha_nac' => '1992-09-11',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '8',
            'equipo_id' => 40, // 'Wanderers'
        ]);

        Jugador::create([
            'file_uri' => 'MartínDíazWanderers.png',
            'nombre' => 'Martín',
            'apellido' => 'Díaz',
            'fecha_nac' => '1993-08-28',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'MC',
            'num_camiseta' => '7',
            'equipo_id' => 40, // 'Wanderers'
        ]);

        Jugador::create([
            'file_uri' => 'GonzaloHernándezWanderers.png',
            'nombre' => 'Gonzalo',
            'apellido' => 'Hernández',
            'fecha_nac' => '1992-10-22',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '9',
            'equipo_id' => 40, // 'Wanderers'
        ]);

        Jugador::create([
            'file_uri' => 'JoséSánchezWanderers.png',
            'nombre' => 'José',
            'apellido' => 'Sánchez',
            'fecha_nac' => '1992-01-18',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '10',
            'equipo_id' => 40, // 'Wanderers'
        ]);

        Jugador::create([
            'file_uri' => 'CarlosMartínezWanderers.png',
            'nombre' => 'Carlos',
            'apellido' => 'Martínez',
            'fecha_nac' => '1991-02-12',
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'posicion' => 'DC',
            'num_camiseta' => '11',
            'equipo_id' => 40, // 'Wanderers'
        ]);
    }
}
