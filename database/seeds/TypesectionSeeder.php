<?php

use Illuminate\Database\Seeder;

class TypesectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('typesections')->insert([
          'name' => 'Artículos',
      ]);
      DB::table('typesections')->insert([
          'name' => 'Videos',
      ]);
      DB::table('typesections')->insert([
          'name' => 'Audios',
      ]);
    }
}
