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
          'url' => 'juan-domingo-peron',
          'description' => 'Un gran Estadista',
          'img_url' => 'image.jpg'
      ]);
      DB::table('authors')->insert([
          'name' => 'Adrián Salbuchi',
          'url' => 'adrian-salbuchi',
          'description' => 'Nuestro Líder',
          'img_url' => 'image.jpg'
      ]);
    }
}
