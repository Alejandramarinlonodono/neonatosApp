<?php

use Illuminate\Database\Seeder;
use App\Scholarship;

class ScholarshipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Scholarship::create(['name' => 'Primaria', 'description' => 'Primeria']);
        Scholarship::create(['name' => 'Secundaria', 'description' => 'Secundaria']);
        Scholarship::create(['name' => 'Técnico', 'description' => 'Técnico']);
        Scholarship::create(['name' => 'Tecnólogo', 'description' => 'Tecnólogo']);
        Scholarship::create(['name' => 'Profesional', 'description' => 'Profesional']);
    }
}
