<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function generateRandomGenres() {
        $name = $this->generateRandomString(rand(2, 15));
        $name = strtolower($name);
        $name = ucfirst($name);
        $name = $name ;
        return $name;
    }

    public function generateRandomPlatform() {
        $positions = ['角色扮演', '動作角色扮演', '戰略角色扮演', '冒險', '恐怖', '競速','清版動作','第三人稱射擊','第一人稱射擊','軌道射擊','平台','橫向卷軸','即時戰略','益智','清版射擊','模擬','格鬥','砍殺','視覺小說','節奏','運動類','射擊'];
        return $positions[rand(0, count($positions)-1)];

    }
    public function run()
    {

       // $date = Carbon::now()->subYears(rand(48,60))->subMonths(rand(0,12))->subRealDays(rand(0,31));
        for ($i=0; $i<25; $i++)
        {
            $positions=$this->generateRandomPlatform();
            $random_datetime = Carbon::now()->subMinutes(rand(1,55));
            DB::table('genres')->insert([
                'name' => $positions ,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
