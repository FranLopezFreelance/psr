<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Admin',
          'email' => 'admin@psr.com.ar',
          'password' => bcrypt('123456')
      ]);
      DB::table('users')->insert([
          'name' => 'Sergio Makaruk',
          'email' => 'sergiomakaruk@gmail.com',
          'password' => bcrypt('Acuario1936')
      ]);
      DB::table('users')->insert([
          'name' => 'Leandro Licitra',
          'email' => 'leandrolicitra@gmail.com',
          'password' => bcrypt('Acuario1936')
      ]);
      DB::table('users')->insert([
          'name' => 'Lucia Calónico',
          'email' => 'luciacalonico@gmail.com',
          'password' => bcrypt('Acuario1936')
      ]);
      DB::table('users')->insert([
          'name' => 'Nicolas López',
          'email' => 'nicolaslopez@gmail.com',
          'password' => bcrypt('Acuario1936')
      ]);
    }
}
