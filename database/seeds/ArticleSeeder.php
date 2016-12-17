<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('articles')->insert([
          'section_id' => 2,
          'url' => 'la-hora-de-los-pueblos',
          'title' => 'La hora de los Pueblos',
          'text' => 'Tal vez algunas personas que puedan leer este libro lleguen a pensar
            que se trata de un enemigo de Estados Unidos: nada más lejos de la verdad.
            Yo no ataco, critico, y esa crítica no es al país ni al pueblo, ni siquiera a
            la nacionalidad, sino a los hombres a quienes la casualidad ha puesto en
            situación de decidir, y si en la política internacional han equivocado el camino
            de la grandeza, en otros aspectos sin duda acertaron. Hace pocos días, Arnold
            J. Toynbee, en un artículo del ABC de Madrid intitulado “Estados Unidos en
            crisis”, decía textualmente: “Los Estados Unidos han tenido durante muchos
            años una falsa sensación de seguridad, una falsa euforia, que ahora ha
            quedado destrozada”, y no creo que Toynbee sea un enemigo de Estados
            Unidos.',
          'autor_id' => 1,
      ]);
    }
}
