<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AnesthesiatypesTableSeeder::class);
        $this->call(CivistatesTableSeeder::class);
        $this->call(ScholarshipTableSeeder::class);
        $this->call(GenreTableSeed::class);
        $this->call(InstitutionsTableSeeder::class);
        $this->call(KeepersTableSeeder::class);
    }
}
