<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appointments')->insert([
            "driver_id"=> "10000001",
            "description"=> "some brief description",
            "date"=> "Thu Mar 26 2020",
            "time"=> "13:25:00",
        ]);
        DB::table('appointments')->insert([
            "driver_id"=> "10000001",
            "description"=> "some brief description",
            "date"=> "Thu Mar 26 2020",
            "time"=> "17:00:00",
        ]);
    }
}
