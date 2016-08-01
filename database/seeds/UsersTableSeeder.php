<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'superadmin',
            'email' => 'superadmin@superadmin.com',
            'password' => bcrypt('superadmin'),
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        DB::table('users')->insert([
            'name' => 'manager',
            'email' => 'manager@manager.com',
            'password' => bcrypt('manager'),
        ]);
    }
}
