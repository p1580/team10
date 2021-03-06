<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomString($length = 10) {
        $characters = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function generateRandomNum($length = 10) {
        $characters = '1234567890';
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

    public function generatecardid() {
        $name = $this->generateRandomNum(rand(8, 8));
        $name1 = "D" . "10" . $name;
        return $name1;
    }
    public function generatecid() {
        $positions = rand(1, 4);
        return $positions;
    }

    public function generatelesson() {
        $positions = rand(1, 4);
        return $positions;
    }

    public function generatelessonend() {
        $positions = rand(5, 9);
        return $positions;
    }

    public function run()
    {
        for ($i=0; $i<10; $i++)
        {
            $card_id = $this->generatecardid();
            $cid = $this->generatecid();
            $lesson_start = $this->generatelesson();
            $lesson_end = $this->generatelessonend();
            $random_datetime = Carbon::now()->subMinutes(rand(1,55));
            DB::table('reservations')->insert([
                'card_id' => $card_id,
                'cid' => $cid,
                'start_at' => $lesson_start,
                'end_of' => $lesson_end,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
