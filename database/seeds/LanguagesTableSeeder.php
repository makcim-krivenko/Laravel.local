<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'name' => 'English',
            'is_default' => 1,
            'is_active' => 1,
            'lang_key' => 'En',
        ]);

        DB::table('languages')->insert([
            'name' => 'Русский',
            'is_default' => 0,
            'is_active' => 1,
            'lang_key' => 'Ru',
        ]);
    }
}
