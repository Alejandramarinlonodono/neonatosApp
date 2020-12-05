<?php

use Illuminate\Database\Seeder;
use App\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create(['name' => 'Activo', 'description' => 'Activo en el sistema']);
        State::create(['name' => 'Inactivo', 'description' => 'Inactivo en el sistema']);
        State::create(['name' => 'Crítico', 'description' => 'Neonato en esta crítico solicita atención']);
        State::create(['name' => 'Intermedio', 'description' => 'Neonato en esta intermedio no requiere atención constante']);
        State::create(['name' => 'Normal', 'description' => 'Neonato en esta normal esta reaccionando bien al tratamiento']);
    }
}
