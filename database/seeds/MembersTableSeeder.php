<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'name' => '清水',
            'user_id' => 1,
        ]);

        DB::table('members')->insert([
            'name' => '田坂',
            'user_id' => 1,
        ]);

        DB::table('members')->insert([
            'name' => '城戸',
            'user_id' => 1,
        ]);

        DB::table('members')->insert([
            'name' => '渡会',
            'user_id' => 1,
        ]);

        DB::table('members')->insert([
            'name' => '小谷',
            'user_id' => 1,
        ]);

        DB::table('members')->insert([
            'name' => '田中',
            'user_id' => 1,
        ]);

        DB::table('members')->insert([
            'name' => '飯塚',
            'user_id' => 1,
        ]);

        DB::table('members')->insert([
            'name' => '馬鳥',
            'user_id' => 1,
        ]);
    }
}
