<?php

use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('contacts')->insert([
        'name' => 'Francisco',
        'email' => 'franlopez.psr@gmail.com',
        'subject' => 'Primer Pilar',
        'message' => 'Restablecer los Valores Éticos y Morales Restablecer los Valores Éticos y Morales Restablecer los Valores Éticos y Morales Restablecer los Valores Éticos y Morales',
      ]);
      DB::table('contacts')->insert([
        'name' => 'Aureliano Gonzalez',
        'email' => 'elloco.psr@gmail.com',
        'subject' => 'Primer Pilar',
        'message' => 'Restablecer los Valores Éticos y Morales Restablecer los Valores Éticos y Morales Restablecer los Valores Éticos y MoralesRestablecer los Valores Éticos y Morales Restablecer los Valores Éticos y Morales',
      ]);
      DB::table('contacts')->insert([
        'name' => 'Marcos Aguirre',
        'email' => 'minrodrosario@gmail.com',
        'subject' => 'Primer Pilar',
        'message' => 'Restablecer los Valores Éticos y Morales Restablecer los Valores Éticos y Morales Restablecer los Valores Éticos y Morales Restablecer los Valores Éticos y MoralesRestablecer los Valores Éticos y Morales Restablecer los Valores Éticos y Morales',
      ]);
      DB::table('contacts')->insert([
        'name' => 'Roberto Peinado',
        'email' => 'franlopez.psr@gmail.com',
        'subject' => 'Primer Pilar',
        'message' => 'Restablecer los Valores Éticos y Morales Restablecer los Valores Éticos y Morales Restablecer los Valores Éticos y Morales Restablecer los Valores Éticos y Morales Restablecer los Valores Éticos y Morales',
      ]);
    }
}
