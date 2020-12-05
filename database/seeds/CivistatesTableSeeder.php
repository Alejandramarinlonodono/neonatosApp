<?php

use Illuminate\Database\Seeder;
use App\Civilstate;

class CivistatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Civilstate::create(['name' => 'soltero', 'description' => 'soltero']);
        Civilstate::create(['name' => 'casado', 'description' => 'casado']);
        Civilstate::create(['name' => 'viudo', 'description' => 'viudo']);
        Civilstate::create(['name' => 'divorciado', 'description' => 'divorciado']);
        Civilstate::create(['name' => 'union libre', 'description' => 'union libre']);
    }
}
