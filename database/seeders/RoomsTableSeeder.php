<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generaterid() {
        $positions = ['F309', 'F313', 'F314', 'F308'];
        return $positions[rand(0, count($positions)-1)];

    }

    public function run()
    {
        DB::table('rooms')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'room_id' => 'F308',
                ),

            1 =>
                array(
                    'id' => 2,
                    'room_id' => 'F309',
                ),

            2 =>
                array(
                    'id' => 3,
                    'room_id' => 'F313',
                ),

            3 =>
                array(
                    'id' => 4,
                    'room_id' => 'F314',
                ),
        ));
    }
}
