<?php

use Illuminate\Database\Seeder;

class TypeviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('typeviews')->insert([
          'name' => 'Pilar',
          'index_view' => 'pillars.index',
          'show_view' => 'pillars.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Artículo',
          'index_view' => 'articles.index',
          'show_view' => 'articles.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Programa',
          'index_view' => 'programs.index',
          'show_view' => 'programs.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Radio',
          'index_view' => 'radio.index',
          'show_view' => 'radio.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Prensa',
          'index_view' => 'prensa.index',
          'show_view' => 'prensa.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Evento',
          'index_view' => 'events.index',
          'show_view' => 'events.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Foto',
          'index_view' => 'photos.index',
          'show_view' => 'photos.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Libro',
          'index_view' => 'books.index',
          'show_view' => 'books.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Contacto',
          'index_view' => 'contact.index',
          'show_view' => 'contact.show',
          'dynamic' => 0
      ]);
      DB::table('typeviews')->insert([
          'name' => 'PSR en Acción',
          'index_view' => 'actions.index',
          'show_view' => 'actions.show',
          'dynamic' => 0
      ]);
    }
}
