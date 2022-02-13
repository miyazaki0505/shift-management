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
            'name' => 'ミドリ合同会社',
            'email' => 'midori@sample.com',
            'password' => bcrypt('midori'),
        ]);
    }
}
