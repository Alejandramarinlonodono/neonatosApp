<?php

use Illuminate\Database\Seeder;
use App\Anesthesiatype;

class AnesthesiatypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Anesthesiatype::create(['name' => 'local', 'description' => 'local']);
        Anesthesiatype::create(['name' => 'regional', 'description' => 'regional']);
        Anesthesiatype::create(['name' => 'general', 'description' => 'general']);
    }
}
