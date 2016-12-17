<?php

use Illuminate\Database\Seeder;

class AuthorArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('authorsArticles')->insert([
          'author_id' => 1,
          'article_id' => 1,
      ]);
    }
}
