<?php

use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('authors')->insert([
          'name' => 'Juan Domingo Perón',
      ]);
      DB::table('authors')->insert([
          'name' => 'Adrián Salbuchi',
      ]);
    }
}
