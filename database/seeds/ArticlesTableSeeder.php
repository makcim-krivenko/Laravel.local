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
            'title' => 'Article #1',
            'content' => 'Article #1 content',
        ]);

        DB::table('articles')->insert([
            'title' => 'Article #2',
            'content' => 'Article #2 content',
        ]);

        DB::table('articles')->insert([
            'title' => 'Article #3',
            'content' => 'Article #3 content',
        ]);
    }
}
