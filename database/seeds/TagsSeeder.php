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
          'name' => 'Bloque Nacional',
          'url' => 'bloque-nacional',
      ]);
      DB::table('tags')->insert([
          'name' => 'Bloque Internacional',
          'url' => 'bloque-internacional',
      ]);
      DB::table('tags')->insert([
          'name' => 'Programa Especial',
          'url' => 'programa-especial',
      ]);
      DB::table('tags')->insert([
          'name' => 'Primer Pilar',
          'url' => 'primer-pilar',
      ]);
      DB::table('tags')->insert([
          'name' => 'Segundo Pilar',
          'url' => 'segundo-pilar',
      ]);
      DB::table('tags')->insert([
          'name' => 'Tercer Pilar',
          'url' => 'tercer-pilar',
      ]);
      DB::table('tags')->insert([
          'name' => 'Cuarto Pilar',
          'url' => 'cuarto-pilar',
      ]);
      DB::table('tags')->insert([
          'name' => 'Quinto Pilar',
          'url' => 'quinto-pilar',
      ]);

      DB::table('tags')->insert([
          'name' => 'Medio Ambiente',
          'url' => 'medio-ambiente',
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
          'name' => 'Deuda Externa',
          'url' => 'deuda-externa',
      ]);
      DB::table('tags')->insert([
          'name' => 'Cultura',
          'url' => 'cultura',
      ]);
      DB::table('tags')->insert([
          'name' => 'Geopolítica',
          'url' => 'geopolítica',
      ]);
      DB::table('tags')->insert([
          'name' => 'Donal Trump',
          'url' => 'donal-trump',
      ]);

    }
}
