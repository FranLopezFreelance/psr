<?php

use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sections')->insert([
          'level' => 1,
          'section_id' => 0,
          'url' => 'nacional',
          'name' => 'Nacional',
      ]);
      DB::table('sections')->insert([
          'level' => 2,
          'section_id' => 0,
          'url' => 'internacional',
          'name' => 'Internacional',
      ]);
      DB::table('sections')->insert([
          'level' => 2,
          'section_id' => 1,
          'url' => 'economia',
          'name' => 'Economía',
      ]);
      DB::table('sections')->insert([
          'level' => 2,
          'section_id' => 1,
          'url' => 'politica',
          'name' => 'Política',
      ]);
    }
}
