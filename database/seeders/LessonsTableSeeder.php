<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'lesson_id' => '第一節',
                ),

            1 =>
                array(
                    'id' => 2,
                    'lesson_id' => '第二節',
                ),

            2 =>
                array(
                    'id' => 3,
                    'lesson_id' => '第三節',
                ),

            3 =>
                array(
                    'id' => 4,
                    'lesson_id' => '第四節',
                ),

            4 =>
                array(
                    'id' => 5,
                    'lesson_id' => '第五節',
                ),

            5 =>
                array(
                    'id' => 6,
                    'lesson_id' => '第六節',
                ),

            6 =>
                array(
                    'id' => 7,
                    'lesson_id' => '第七節',
                ),

            7 =>
                array(
                    'id' => 8,
                    'lesson_id' => '第八節',
                ),

            8 =>
                array(
                    'id' => 9,
                    'lesson_id' => '第九節',
                ),

            9 =>
                array(
                    'id' => 10,
                    'lesson_id' => '第A節',
                ),

            10 =>
                array(
                    'id' => 11,
                    'lesson_id' => '第B節',
                ),

            11 =>
                array(
                    'id' => 12,
                    'lesson_id' => '第C節',
                ),

            12 =>
                array(
                    'id' => 13,
                    'lesson_id' => '第D節',
                ),

            13 =>
                array(
                    'id' => 14,
                    'lesson_id' => '第E節',
                ),
        ));
    }
}
