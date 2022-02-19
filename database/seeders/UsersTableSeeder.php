<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => 1,
            'member_id' => 10001,
            'gender' => 1,
            'email' => 'n.kei 0801 1997@gmail.com',
            'name' => '中野桂佑',
            'nickname' => 'けいすけ',
            'birthday' => '1997-08-01',
            'age' => 24,
            'password' => 'keisuke81',
            'img_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg'
        ];
        DB::table('users')->insert($param);
    }
}
