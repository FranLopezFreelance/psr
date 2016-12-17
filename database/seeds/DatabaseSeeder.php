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
    {
        $this->call(ArticleSeeder::class);
        $this->call(SectionSeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(TagArticleSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(AuthorArticleSeeder::class);
    }
}
