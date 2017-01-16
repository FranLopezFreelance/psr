<?php

use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('contents')->insert([
        'section_id' => 11,
        'url' => 'primer-pilar',
        'title' => 'Primer Pilar',
        'html_title' => 'Restablecer los Valores Éticos y Morales',
        'typeview_id' => 1,
        'date' => '2017-01-01',
        'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
        'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
        'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
                A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
                Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
                Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
      ]);
      DB::table('contents')->insert([
        'section_id' => 16,
        'url' => 'moneda-soberana',
        'title' => 'Moneda Soberana',
        'html_title' => 'Moneda Soberana',
        'typeview_id' => 2,
        'date' => '2017-01-01',
        'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
        'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
        'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
                A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
                Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
                Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
      ]);

      DB::table('contents')->insert([
        'section_id' => 3,
        'url' => 'videoZZZ',
        'img_url' => '/img/test/video-1.jpg',
        'title' => 'Ejemplo de Video',
        'html_title' => 'Ejemplo de Video',
        'typeview_id' => 3,
        'date' => '2017-01-01',
        'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
        'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
        'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
                A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
                Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
                Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
      ]);

      DB::table('contents')->insert([
        'section_id' => 3,
        'url' => 'videoZZZ2',
        'img_url' => '/img/test/video-2.jpg',
        'title' => 'Ejemplo de Video2',
        'html_title' => 'Ejemplo de Video2',
        'typeview_id' => 3,
        'date' => '2017-01-01',
        'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
        'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
        'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
                A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
                Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
                Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
      ]);

      DB::table('contents')->insert([
        'section_id' => 3,
        'url' => 'videoZZZ3',
        'img_url' => '/img/test/video-1.jpg',
        'title' => 'Ejemplo de Video3',
        'html_title' => 'Ejemplo de Video3',
        'typeview_id' => 3,
        'date' => '2017-01-01',
        'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
        'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
        'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
                A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
                Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
                Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
      ]);


    DB::table('contents')->insert([
      'section_id' => 3,
      'url' => 'videoZZZ4',
      'img_url' => '/img/test/video-2.jpg',
      'title' => 'Ejemplo de Video4',
      'html_title' => 'Ejemplo de Video4',
      'typeview_id' => 3,
      'date' => '2017-01-01',
      'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
      'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
      'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
              A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
              Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
              Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
    ]);

    DB::table('contents')->insert([
      'section_id' => 3,
      'url' => 'videoZZZ5',
      'img_url' => '/img/test/video-1.jpg',
      'title' => 'Ejemplo de Video5',
      'html_title' => 'Ejemplo de Video5',
      'typeview_id' => 3,
      'date' => '2017-01-01',
      'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
      'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
      'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
              A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
              Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
              Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
    ]);


  DB::table('contents')->insert([
    'section_id' => 3,
    'url' => 'videoZZZ6',
    'img_url' => '/img/test/video-2.jpg',
    'title' => 'Ejemplo de Video6',
    'html_title' => 'Ejemplo de Video6',
    'typeview_id' => 3,
    'date' => '2017-01-01',
    'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
    'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
    'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
            A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
            Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
            Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
  ]);

  DB::table('contents')->insert([
    'section_id' => 3,
    'url' => 'videoZZZ',
    'img_url' => '/img/test/video-1.jpg',
    'title' => 'Ejemplo de Video',
    'html_title' => 'Ejemplo de Video',
    'typeview_id' => 3,
    'date' => '2017-01-01',
    'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
    'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
    'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
            A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
            Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
            Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
  ]);

  DB::table('contents')->insert([
    'section_id' => 3,
    'url' => 'videoZZZ2',
    'img_url' => '/img/test/video-2.jpg',
    'title' => 'Ejemplo de Video2',
    'html_title' => 'Ejemplo de Video2',
    'typeview_id' => 3,
    'date' => '2017-01-01',
    'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
    'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
    'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
            A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
            Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
            Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
  ]);

  DB::table('contents')->insert([
    'section_id' => 3,
    'url' => 'videoZZZ3',
    'img_url' => '/img/test/video-1.jpg',
    'title' => 'Ejemplo de Video3',
    'html_title' => 'Ejemplo de Video3',
    'typeview_id' => 3,
    'date' => '2017-01-01',
    'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
    'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
    'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
            A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
            Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
            Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
  ]);


DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ4',
  'img_url' => '/img/test/video-2.jpg',
  'title' => 'Ejemplo de Video4',
  'html_title' => 'Ejemplo de Video4',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ5',
  'img_url' => '/img/test/video-1.jpg',
  'title' => 'Ejemplo de Video5',
  'html_title' => 'Ejemplo de Video5',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);


DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ6',
'img_url' => '/img/test/video-2.jpg',
'title' => 'Ejemplo de Video6',
'html_title' => 'Ejemplo de Video6',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
        A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
        Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
        Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ',
  'img_url' => '/img/test/video-1.jpg',
  'title' => 'Ejemplo de Video',
  'html_title' => 'Ejemplo de Video',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ2',
  'img_url' => '/img/test/video-2.jpg',
  'title' => 'Ejemplo de Video2',
  'html_title' => 'Ejemplo de Video2',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ3',
  'img_url' => '/img/test/video-1.jpg',
  'title' => 'Ejemplo de Video3',
  'html_title' => 'Ejemplo de Video3',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);


DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ4',
'img_url' => '/img/test/video-2.jpg',
'title' => 'Ejemplo de Video4',
'html_title' => 'Ejemplo de Video4',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
        A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
        Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
        Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ5',
'img_url' => '/img/test/video-1.jpg',
'title' => 'Ejemplo de Video5',
'html_title' => 'Ejemplo de Video5',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
        A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
        Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
        Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);


DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ6',
'img_url' => '/img/test/video-2.jpg',
'title' => 'Ejemplo de Video6',
'html_title' => 'Ejemplo de Video6',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
      A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
      Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
      Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ',
  'img_url' => '/img/test/video-1.jpg',
  'title' => 'Ejemplo de Video',
  'html_title' => 'Ejemplo de Video',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ2',
  'img_url' => '/img/test/video-2.jpg',
  'title' => 'Ejemplo de Video2',
  'html_title' => 'Ejemplo de Video2',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ3',
  'img_url' => '/img/test/video-1.jpg',
  'title' => 'Ejemplo de Video3',
  'html_title' => 'Ejemplo de Video3',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);


DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ4',
'img_url' => '/img/test/video-2.jpg',
'title' => 'Ejemplo de Video4',
'html_title' => 'Ejemplo de Video4',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
        A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
        Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
        Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ5',
'img_url' => '/img/test/video-1.jpg',
'title' => 'Ejemplo de Video5',
'html_title' => 'Ejemplo de Video5',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
        A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
        Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
        Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);


DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ6',
'img_url' => '/img/test/video-2.jpg',
'title' => 'Ejemplo de Video6',
'html_title' => 'Ejemplo de Video6',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
      A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
      Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
      Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ',
  'img_url' => '/img/test/video-1.jpg',
  'title' => 'Ejemplo de Video',
  'html_title' => 'Ejemplo de Video',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ2',
  'img_url' => '/img/test/video-2.jpg',
  'title' => 'Ejemplo de Video2',
  'html_title' => 'Ejemplo de Video2',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ3',
  'img_url' => '/img/test/video-1.jpg',
  'title' => 'Ejemplo de Video3',
  'html_title' => 'Ejemplo de Video3',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);


DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ4',
'img_url' => '/img/test/video-2.jpg',
'title' => 'Ejemplo de Video4',
'html_title' => 'Ejemplo de Video4',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
        A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
        Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
        Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ5',
'img_url' => '/img/test/video-1.jpg',
'title' => 'Ejemplo de Video5',
'html_title' => 'Ejemplo de Video5',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
        A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
        Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
        Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);


DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ6',
'img_url' => '/img/test/video-2.jpg',
'title' => 'Ejemplo de Video6',
'html_title' => 'Ejemplo de Video6',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
      A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
      Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
      Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ',
  'img_url' => '/img/test/video-1.jpg',
  'title' => 'Ejemplo de Video',
  'html_title' => 'Ejemplo de Video',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ2',
  'img_url' => '/img/test/video-2.jpg',
  'title' => 'Ejemplo de Video2',
  'html_title' => 'Ejemplo de Video2',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ3',
  'img_url' => '/img/test/video-1.jpg',
  'title' => 'Ejemplo de Video3',
  'html_title' => 'Ejemplo de Video3',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);


DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ4',
'img_url' => '/img/test/video-2.jpg',
'title' => 'Ejemplo de Video4',
'html_title' => 'Ejemplo de Video4',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
        A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
        Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
        Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ5',
'img_url' => '/img/test/video-1.jpg',
'title' => 'Ejemplo de Video5',
'html_title' => 'Ejemplo de Video5',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
        A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
        Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
        Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);


DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ6',
'img_url' => '/img/test/video-2.jpg',
'title' => 'Ejemplo de Video6',
'html_title' => 'Ejemplo de Video6',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
      A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
      Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
      Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ',
  'img_url' => '/img/test/video-1.jpg',
  'title' => 'Ejemplo de Video',
  'html_title' => 'Ejemplo de Video',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ2',
  'img_url' => '/img/test/video-2.jpg',
  'title' => 'Ejemplo de Video2',
  'html_title' => 'Ejemplo de Video2',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ3',
  'img_url' => '/img/test/video-1.jpg',
  'title' => 'Ejemplo de Video3',
  'html_title' => 'Ejemplo de Video3',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);


DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ4',
'img_url' => '/img/test/video-2.jpg',
'title' => 'Ejemplo de Video4',
'html_title' => 'Ejemplo de Video4',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
        A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
        Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
        Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ5',
'img_url' => '/img/test/video-1.jpg',
'title' => 'Ejemplo de Video5',
'html_title' => 'Ejemplo de Video5',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
        A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
        Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
        Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);


DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ6',
'img_url' => '/img/test/video-2.jpg',
'title' => 'Ejemplo de Video6',
'html_title' => 'Ejemplo de Video6',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
      A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
      Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
      Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ',
  'img_url' => '/img/test/video-1.jpg',
  'title' => 'Ejemplo de Video',
  'html_title' => 'Ejemplo de Video',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ2',
  'img_url' => '/img/test/video-2.jpg',
  'title' => 'Ejemplo de Video2',
  'html_title' => 'Ejemplo de Video2',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ3',
  'img_url' => '/img/test/video-1.jpg',
  'title' => 'Ejemplo de Video3',
  'html_title' => 'Ejemplo de Video3',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);


DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ4',
'img_url' => '/img/test/video-2.jpg',
'title' => 'Ejemplo de Video4',
'html_title' => 'Ejemplo de Video4',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
        A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
        Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
        Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ5',
'img_url' => '/img/test/video-1.jpg',
'title' => 'Ejemplo de Video5',
'html_title' => 'Ejemplo de Video5',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
        A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
        Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
        Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);


DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ6',
'img_url' => '/img/test/video-2.jpg',
'title' => 'Ejemplo de Video6',
'html_title' => 'Ejemplo de Video6',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
      A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
      Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
      Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ',
  'img_url' => '/img/test/video-1.jpg',
  'title' => 'Ejemplo de Video',
  'html_title' => 'Ejemplo de Video',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ2',
  'img_url' => '/img/test/video-2.jpg',
  'title' => 'Ejemplo de Video2',
  'html_title' => 'Ejemplo de Video2',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ3',
  'img_url' => '/img/test/video-1.jpg',
  'title' => 'Ejemplo de Video3',
  'html_title' => 'Ejemplo de Video3',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);


DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ4',
'img_url' => '/img/test/video-2.jpg',
'title' => 'Ejemplo de Video4',
'html_title' => 'Ejemplo de Video4',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
        A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
        Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
        Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ5',
'img_url' => '/img/test/video-1.jpg',
'title' => 'Ejemplo de Video5',
'html_title' => 'Ejemplo de Video5',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
        A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
        Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
        Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);


DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ6',
'img_url' => '/img/test/video-2.jpg',
'title' => 'Ejemplo de Video6',
'html_title' => 'Ejemplo de Video6',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
      A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
      Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
      Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ',
  'img_url' => '/img/test/video-1.jpg',
  'title' => 'Ejemplo de Video',
  'html_title' => 'Ejemplo de Video',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ2',
  'img_url' => '/img/test/video-2.jpg',
  'title' => 'Ejemplo de Video2',
  'html_title' => 'Ejemplo de Video2',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ3',
  'img_url' => '/img/test/video-1.jpg',
  'title' => 'Ejemplo de Video3',
  'html_title' => 'Ejemplo de Video3',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);


DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ4',
'img_url' => '/img/test/video-2.jpg',
'title' => 'Ejemplo de Video4',
'html_title' => 'Ejemplo de Video4',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
        A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
        Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
        Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ5',
'img_url' => '/img/test/video-1.jpg',
'title' => 'Ejemplo de Video5',
'html_title' => 'Ejemplo de Video5',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
        A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
        Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
        Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);


DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ6',
'img_url' => '/img/test/video-2.jpg',
'title' => 'Ejemplo de Video6',
'html_title' => 'Ejemplo de Video6',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
      A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
      Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
      Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ',
  'img_url' => '/img/test/video-1.jpg',
  'title' => 'Ejemplo de Video',
  'html_title' => 'Ejemplo de Video',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ2',
  'img_url' => '/img/test/video-2.jpg',
  'title' => 'Ejemplo de Video2',
  'html_title' => 'Ejemplo de Video2',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
  'section_id' => 3,
  'url' => 'videoZZZ3',
  'img_url' => '/img/test/video-1.jpg',
  'title' => 'Ejemplo de Video3',
  'html_title' => 'Ejemplo de Video3',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);


DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ4',
'img_url' => '/img/test/video-2.jpg',
'title' => 'Ejemplo de Video4',
'html_title' => 'Ejemplo de Video4',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
        A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
        Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
        Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);

DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ5',
'img_url' => '/img/test/video-1.jpg',
'title' => 'Ejemplo de Video5',
'html_title' => 'Ejemplo de Video5',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
        A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
        Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
        Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);


DB::table('contents')->insert([
'section_id' => 3,
'url' => 'videoZZZ6',
'img_url' => '/img/test/video-2.jpg',
'title' => 'Ejemplo de Video6',
'html_title' => 'Ejemplo de Video6',
'typeview_id' => 3,
'date' => '2017-01-01',
'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
      A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
      Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
      Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
]);


  }
}
