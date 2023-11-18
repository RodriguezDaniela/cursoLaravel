<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Alumno::factory(10)->create();
        Alumno::create([
            'nombre'  => 'Juan',
            'edad' => 18,
            'nc' => '2337494956',
            'sexo' => '1'
        ]);

        Alumno::create([
            'nombre'  => 'Daniela',
            'edad' => 18,
            'nc' => '7154932345',
            'sexo' => '1'
        ]);
    }
}
