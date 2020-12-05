<?php

use Illuminate\Database\Seeder;
use App\Institution;

class InstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Institution::create(['name' => 'Hospitalito', 'description' => 'Hospitalito']);
        Institution::create(['name' => 'Hospital de Caldas', 'description' => 'Hospital de Caldas']);
        Institution::create(['name' => 'Hospital Santa Sofia', 'description' => 'Hospital Santa Sofia']);
    }
}
