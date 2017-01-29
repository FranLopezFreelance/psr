<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {//$this->call(SectionSeeder::class);return;
        $this->call(SectionSeeder::class);
        $this->call(TypeviewSeeder::class);
        //$this->call(ContentSeeder::class);
        $this->call(AuthorsSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(VideotypesSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
