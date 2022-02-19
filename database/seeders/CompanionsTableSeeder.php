<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanionsTableSeeder extends Seeder
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
            'companion_id'=>1000,
            'gender'=>2,
            'email'=>'kanako@gmail.com',
            'name' => '前田かなこ',
            'nickname'=>'かなこ',
            'birthday'=>'1996-10-15',
            'age'=>25,
            'password'=>'kanakokanako',
            'img_url'=> 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg'
        ];
        DB::table('companions')->insert($param);

        $param = [
            'id' => 2,
            'companion_id' => 1001,
            'gender' => 2,
            'email' => 'sakura@gmail.com',
            'name' => '田中さくら',
            'nickname' => 'さくら',
            'birthday' => '1997-4-26',
            'age' => 24,
            'password' => 'sakurasakura',
            'img_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg'
        ];
        DB::table('companions')->insert($param);

        $param = [
            'id' => 3,
            'companion_id' => 1002,
            'gender' => 2,
            'email' => 'emiko@gmail.com',
            'name' => '山本えみこ',
            'nickname' => 'えみこ',
            'birthday' => '1993-8-19',
            'age' => 28,
            'password' => 'emikoemiko',
            'img_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg'
        ];
        DB::table('companions')->insert($param);

        $param = [
            'id' => 4,
            'companion_id' => 1003,
            'gender' => 2,
            'email' => 'yuki@gmail.com',
            'name' => '樋口ゆき',
            'nickname' => 'ゆき',
            'birthday' => '1996-7-2',
            'age' => 25,
            'password' => 'yukiyuki',
            'img_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg'
        ];
        DB::table('companions')->insert($param);

        $param = [
            'id' => 5,
            'companion_id' => 1004,
            'gender' => 2,
            'email' => 'misa@gmail.com',
            'name' => '佐々木みさ',
            'nickname' => 'みさ',
            'age' => 29,
            'birthday' => '1992-1-3',
            'password' => 'misamisa',
            'img_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg'
        ];
        DB::table('companions')->insert($param);

        $param = [
            'id' => 6,
            'companion_id' => 1005,
            'gender' => 2,
            'email' => 'jun@gmail.com',
            'name' => '佐藤じゅん',
            'nickname' => 'じゅん',
            'birthday' => '1990-12-27',
            'age' => 31,
            'password' => 'junjunjun',
            'img_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg'
        ];
        DB::table('companions')->insert($param);

        $param = [
            'id' => 7,
            'companion_id' => 1006,
            'gender' => 2,
            'email' => 'erika@gmail.com',
            'name' => '本田えりか',
            'nickname' => 'えりか',
            'birthday' => '1996-2-23',
            'age' => 25,
            'password' => 'erikaerika',
            'img_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg'
        ];
        DB::table('companions')->insert($param);

        $param = [
            'id' => 8,
            'companion_id' => 1007,
            'gender' => 2,
            'email' => 'nanako@gmail.com',
            'name' => '山崎ななこ',
            'nickname' => 'ななこ',
            'birthday' => '1998-4-28',
            'age' => 23,
            'password' => 'nanakonananko',
            'img_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg'
        ];
        DB::table('companions')->insert($param);

        $param = [
            'id' => 9,
            'companion_id' => 1008,
            'gender' => 2,
            'email' => 'shiori@gmail.com',
            'name' => '佐藤しおり',
            'nickname' => 'しおり',
            'birthday' => '1994-5-30',
            'age' => 27,
            'password' => 'shiorishiori',
            'img_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg'
        ];
        DB::table('companions')->insert($param);

        $param = [
            'id' => 10,
            'companion_id' => 1009,
            'gender' => 2,
            'email' => 'riho@gmail.com',
            'name' => '高橋りほ',
            'nickname' => 'りほ',
            'birthday' => '1998-12-20',
            'age' => 23,
            'password' => 'rihoriho',
            'img_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg'
        ];
        DB::table('companions')->insert($param);
    }
}
