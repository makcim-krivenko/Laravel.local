<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'article_id' => 1,
            'user_id' => 6,
            'text' => 'First comment from manager user to first article',
            'is_active' => 1,
            'created_at' => date('Y-m-d h:m:s'),
            'updated_at' => date('Y-m-d h:m:s'),
        ]);

        DB::table('comments')->insert([
            'article_id' => 1,
            'user_id' => 6,
            'text' => 'Second comment from manager user to first article',
            'is_active' => 1,
            'created_at' => date('Y-m-d h:m:s'),
            'updated_at' => date('Y-m-d h:m:s'),
        ]);

        DB::table('comments')->insert([
            'article_id' => 1,
            'user_id' => 5,
            'text' => 'First comment from admin user to first article',
            'is_active' => 1,
            'created_at' => date('Y-m-d h:m:s'),
            'updated_at' => date('Y-m-d h:m:s'),
        ]);

        DB::table('comments')->insert([
            'article_id' => 2,
            'user_id' => 6,
            'text' => 'First comment from manager user to second article',
            'is_active' => 1,
            'created_at' => date('Y-m-d h:m:s'),
            'updated_at' => date('Y-m-d h:m:s'),
        ]);
    }
}
