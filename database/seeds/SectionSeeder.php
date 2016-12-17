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
          'url' => 'politica',
          'name' => 'Política',
      ]);
      DB::table('sections')->insert([
          'level' => 2,
          'section_id' => 1,
          'url' => 'nacional',
          'name' => 'Nacional',
      ]);
    }
}
