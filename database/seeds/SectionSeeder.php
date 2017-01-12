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
          'description' => 'Aquí encontrará artículos del ámbito Nacional',
      ]);
      DB::table('sections')->insert([
          'level' => 1,
          'section_id' => 0,
          'url' => 'internacional',
          'name' => 'Internacional',
          'description' => 'Aquí encontrará artículos del ámbito Internacional',
      ]);
    }
}
