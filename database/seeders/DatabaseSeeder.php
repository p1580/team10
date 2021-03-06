<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ReservationsTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(LessonsTableSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
