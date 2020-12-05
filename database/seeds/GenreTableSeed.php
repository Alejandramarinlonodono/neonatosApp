<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenreTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create(['name' => 'hombre', 'description' => 'hombre']);
        Genre::create(['name' => 'mujer', 'description' => 'mujer']);
        Genre::create(['name' => 'prefiero no contestar', 'description' => 'prefiero no contestar']);
    }
}
