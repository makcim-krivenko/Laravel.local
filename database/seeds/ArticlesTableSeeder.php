<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => 'article_title_1',
            'slug' => 'article_slug_1',
            'content' => 'article_content_1',
            'user_id' => 6,
            'is_active' => 1,
            'created_at' => date('Y-m-d h:m:s'),
            'updated_at' => date('Y-m-d h:m:s'),
        ]);

        DB::table('articles')->insert([
            'title' => 'article_title_2',
            'slug' => 'article_slug_2',
            'content' => 'article_content_2',
            'user_id' => 6,
            'is_active' => 1,
            'created_at' => date('Y-m-d h:m:s'),
            'updated_at' => date('Y-m-d h:m:s'),
        ]);

        DB::table('articles')->insert([
            'title' => 'article_title_3',
            'slug' => 'article_slug_3',
            'content' => 'article_content_3',
            'user_id' => 6,
            'is_active' => 1,
            'created_at' => date('Y-m-d h:m:s'),
            'updated_at' => date('Y-m-d h:m:s'),
        ]);
    }
}
