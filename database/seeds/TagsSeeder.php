<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tags')->insert([
          'name' => 'Moneda Soberana',
          'url' => 'moneda-soberana',
      ]);
      DB::table('tags')->insert([
          'name' => 'Macri Gato',
          'url' => 'macri-gato',
      ]);
      DB::table('tags')->insert([
          'name' => 'Mercosur',
          'url' => 'mercosur',
      ]);
      DB::table('tags')->insert([
          'name' => 'Energía',
          'url' => 'energia',
      ]);
      DB::table('tags')->insert([
          'name' => 'Peronismo',
          'url' => 'peronismo',
      ]);
      DB::table('tags')->insert([
          'name' => 'Religión',
          'url' => 'religion',
      ]);
      DB::table('tags')->insert([
          'name' => 'Medio Ambiente',
          'url' => 'medio-ambiente',
      ]);
      DB::table('tags')->insert([
          'name' => 'Conspiración',
          'url' => 'conspiracion',
      ]);
      DB::table('tags')->insert([
          'name' => 'Esoterismo',
          'url' => 'esoterismo',
      ]);
      DB::table('tags')->insert([
          'name' => 'Plan Quinquenal',
          'url' => 'plan-quinquenal',
      ]);
      DB::table('tags')->insert([
          'name' => 'Economía',
          'url' => 'economia',
      ]);
      DB::table('tags')->insert([
          'name' => 'Política',
          'url' => 'politica',
      ]);
      DB::table('tags')->insert([
          'name' => 'Nueva República',
          'url' => 'nueva-republica',
      ]);
    }
}
