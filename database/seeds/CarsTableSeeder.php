<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
          'make' => 'Subaru',
          'model' => 'Outback',
          'produced_on' => '2001-01-01'
        ]);
    }
}
