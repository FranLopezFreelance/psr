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
          'name' => 'Home',
          'index_view' => 'front.home.index',
          'back_index_view' => 'back.home.index',
          'show_view' => 'front.home.show',
          'back_show_view' => 'back.home.show',
          'dynamic' => 0
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Pilar',
          'index_view' => 'front.pillars.index',
          'back_index_view' => 'back.pillars.index',
          'show_view' => 'front.pillars.show',
          'back_show_view' => 'back.pillars.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Artículo',
          'index_view' => 'front.articles.index',
          'back_index_view' => 'backend.articles.index',
          'show_view' => 'front.articles.show',
          'back_show_view' => 'backend.articles.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Programa',
          'index_view' => 'front.programs.index',
          'back_index_view' => 'backend.programs.index',
          'show_view' => 'front.programs.show',
          'back_show_view' => 'backend.programs.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Radio',
          'index_view' => 'front.radio.index',
          'back_index_view' => 'backend.radio.index',
          'show_view' => 'front.radio.show',
          'back_show_view' => 'backend.radio.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Prensa',
          'index_view' => 'front.prensa.index',
          'back_index_view' => 'backend.prensa.index',
          'show_view' => 'front.prensa.show',
          'back_show_view' => 'backend.prensa.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Evento',
          'index_view' => 'front.events.index',
          'back_index_view' => 'backend.events.index',
          'show_view' => 'front.events.show',
          'back_show_view' => 'backend.events.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Foto',
          'index_view' => 'front.photos.index',
          'back_index_view' => 'backend.photos.index',
          'show_view' => 'front.photos.show',
          'back_show_view' => 'backend.photos.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Libro',
          'index_view' => 'front.books.index',
          'back_index_view' => 'backend.books.index',
          'show_view' => 'front.books.show',
          'back_show_view' => 'backend.books.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Contacto',
          'index_view' => 'front.contact.index',
          'back_index_view' => 'backend.contact.index',
          'show_view' => 'front.contact.show',
          'back_show_view' => 'backend.contact.show',
          'dynamic' => 0
      ]);
      DB::table('typeviews')->insert([
          'name' => 'PSR en Acción',
          'index_view' => 'front.actions.index',
          'back_index_view' => 'backend.actions.index',
          'show_view' => 'front.actions.show',
          'back_show_view' => 'backend.actions.show',
          'dynamic' => 0
      ]);
    }
}
