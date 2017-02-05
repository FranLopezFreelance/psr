<?php

use Illuminate\Database\Seeder;

class VideotypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('videotypes')->insert([
          'name' => 'Youtube',
      ]);
      DB::table('videotypes')->insert([
          'name' => 'Vimeo',
      ]);
    }
}
