<?php

use Illuminate\Database\Seeder;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('authors')->insert([
          'name' => 'Adrián Salbuchi',
          'img' => 'adrian-salbuchi.png',
          'active' => 1,
      ]);
      DB::table('authors')->insert([
          'name' => 'Enrique Romero',
          'img' => 'enrique-romero.png',
          'active' => 1,
      ]);
      DB::table('authors')->insert([
          'name' => 'Héctor Giuliano',
          'img' => 'hector-giuliano.png',
          'active' => 1,
      ]);
      DB::table('authors')->insert([
          'name' => 'Denes Martos',
          'img' => 'denes-martos.png',
          'active' => 1,
      ]);
    }
}
