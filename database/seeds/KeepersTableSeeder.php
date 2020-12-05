<?php

use Illuminate\Database\Seeder;
use App\Keeper;

class KeepersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Keeper::create(['name' => 'Alejandra', 'lastname' => 'Marin', 'cellphone' => "12345678"]);
        Keeper::create(['name' => 'Pepe', 'lastname' => 'Perez', 'cellphone' => "87654321"]);
        Keeper::create(['name' => 'Juan', 'lastname' => 'Pimenton', 'cellphone' => "98745123"]);
    }
}
