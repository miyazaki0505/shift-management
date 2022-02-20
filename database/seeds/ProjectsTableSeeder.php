<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'working_day' => 20220401,
            'project_name' => '建て方',
            'people_number' => 4,
            'work_time' => 1,
            'work_adress' => '東京都xx区xxx1-1-1',
            'company_id' => 1,
            'user_id' => 1,
            'work_content' => '2階建て1棟',
            'other' => '安全帯必須',
        ]);

        DB::table('projects')->insert([
            'working_day' => 20220401,
            'project_name' => '解体材搬出',
            'people_number' => 2,
            'work_time' => 1,
            'work_adress' => '東京都xx区xxx2-2-2',
            'company_id' => 2,
            'user_id' => 1,
            'work_content' => '改修工事の解体材搬出',
            'other' => '内履き必須',
        ]);

        DB::table('projects')->insert([
            'working_day' => 20220401,
            'project_name' => 'OA手元',
            'people_number' => 2,
            'work_time' => 1,
            'work_adress' => '神奈川県横浜市xx区xxx1-1-1',
            'company_id' => 3,
            'user_id' => 1,
            'work_content' => '職人の手元作業',
            'other' => '7:50までに現場内に入場していること。',
        ]);

        DB::table('projects')->insert([
            'working_day' => 20220401,
            'project_name' => 'フローリング搬入',
            'people_number' => 1,
            'work_time' => 2,
            'work_adress' => '神奈川県横浜市xx区xxx2-2-2',
            'company_id' => 4,
            'user_id' => 1,
            'work_content' => 'フローリング材の搬入作業',
            'other' => 'null',
        ]);

    }
}
