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
        for ($i=0; $i<4; $i++)
        {
            $room_id = $this->generaterid();
            DB::table('rooms')->insert([
                'room_id' => $room_id,
            ]);
        }
    }
}
