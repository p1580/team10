<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesTableSeeder extends Seeder
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
    public function generateRandomName() {
        $first_name = $this->generateRandomString(rand(2, 15));
        $first_name = strtolower($first_name);
        $first_name = ucfirst($first_name);
        $last_name = $this->generateRandomString(rand(2, 15));
        $last_name = strtolower($last_name);
        $last_name = ucfirst($last_name);
        $name = $first_name . " ". $last_name;
        return $name;
    }

    public function generateRandomNationality() {
        $positions = ['STEAM', 'SWITCH', 'PS4', 'PS5', 'WINDOWS'];
        return $positions[rand(0, count($positions)-1)];

    }
    public function generateRandomDeveloper() {
        $name = $this->generateRandomString(rand(2, 15));
        $name = strtolower($name);
        $name = ucfirst($name);
        $name = $name ;
        return $name;
    }
    public function generateRandomPublisher() {
        $name = $this->generateRandomString(rand(2, 15));
        $name = strtolower($name);
        $name = ucfirst($name);
        $name = $name ;
        return $name;
    }

    public function run()
    {
        for ($i=0; $i<130; $i++)
        {
            $name = $this->generateRandomName();
            $developer=$this->generateRandomDeveloper();
            $platform = $this->generateRandomNationality();
            $publisher = $this->generateRandomPublisher();
            $random_datetime = Carbon::now()->subMinutes(rand(1,55));
            $date = Carbon::now()->subYears(rand(48,60))->subMonths(rand(0,12))->subRealDays(rand(0,31));
            DB::table('Games')->insert([
                'name' => $name,
                'gid' => rand(1, 23),
                'platform' => $platform,
                'releasedate' => $date,
                'publisher' =>$publisher,
                'developer'=>$developer,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
