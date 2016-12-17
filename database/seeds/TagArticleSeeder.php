<?php

use Illuminate\Database\Seeder;

class TagArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tagsArticles')->insert([
          'tag_id' => 1,
          'article_id' => 1,
      ]);
      DB::table('tagsArticles')->insert([
          'tag_id' => 2,
          'article_id' => 1,
      ]);
      DB::table('tagsArticles')->insert([
          'tag_id' => 3,
          'article_id' => 1,
      ]);
    }
}
