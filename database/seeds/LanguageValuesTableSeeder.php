<?php

use Illuminate\Database\Seeder;

class LanguageValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('language_values')->insert([
            'language_id' => 1,
            'key' => 'article_title_1',
            'value' => 'Article #1 title',
        ]);

        DB::table('language_values')->insert([
            'language_id' => 1,
            'key' => 'article_slug_1',
            'value' => 'Article #1 slug',
        ]);

        DB::table('language_values')->insert([
            'language_id' => 1,
            'key' => 'article_content_1',
            'value' => 'Article #1 content',
        ]);

        DB::table('language_values')->insert([
            'language_id' => 2,
            'key' => 'article_title_1',
            'value' => 'Статья №1 заголовок',
        ]);

        DB::table('language_values')->insert([
            'language_id' => 2,
            'key' => 'article_slug_1',
            'value' => 'Статья №1 описание',
        ]);

        DB::table('language_values')->insert([
            'language_id' => 2,
            'key' => 'article_content_1',
            'value' => 'Статья №1 контент',
        ]);

        DB::table('language_values')->insert([
            'language_id' => 1,
            'key' => 'article_title_2',
            'value' => 'Article #2 title',
        ]);

        DB::table('language_values')->insert([
            'language_id' => 1,
            'key' => 'article_slug_2',
            'value' => 'Article #2 slug',
        ]);

        DB::table('language_values')->insert([
            'language_id' => 1,
            'key' => 'article_content_2',
            'value' => 'Article #2 content',
        ]);

        DB::table('language_values')->insert([
            'language_id' => 2,
            'key' => 'article_title_2',
            'value' => 'Статья №2 заголовок',
        ]);

        DB::table('language_values')->insert([
            'language_id' => 2,
            'key' => 'article_slug_2',
            'value' => 'Статья №2 описание',
        ]);

        DB::table('language_values')->insert([
            'language_id' => 2,
            'key' => 'article_content_2',
            'value' => 'Статья №2 контент',
        ]);

        DB::table('language_values')->insert([
            'language_id' => 1,
            'key' => 'article_title_3',
            'value' => 'Article #3 title',
        ]);

        DB::table('language_values')->insert([
            'language_id' => 1,
            'key' => 'article_slug_3',
            'value' => 'Article #3 slug',
        ]);

        DB::table('language_values')->insert([
            'language_id' => 1,
            'key' => 'article_content_3',
            'value' => 'Article #3 content',
        ]);

        DB::table('language_values')->insert([
            'language_id' => 2,
            'key' => 'article_title_3',
            'value' => 'Статья №3 заголовок',
        ]);

        DB::table('language_values')->insert([
            'language_id' => 2,
            'key' => 'article_slug_3',
            'value' => 'Статья №3 описание',
        ]);

        DB::table('language_values')->insert([
            'language_id' => 2,
            'key' => 'article_content_3',
            'value' => 'Статья №3 контент',
        ]);
    }
}
