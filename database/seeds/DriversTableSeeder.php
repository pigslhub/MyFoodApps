<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DriversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('password');

        DB::table('drivers')->insert([
            "name" => "ali",
            "email" => "ali@gmail.com",
            "password" => $password,
            "gender" => "male",
            "address" => "satellite towns",
            "phone" => "123545444345",
            "area_code" => "10001",
            "dob" => "2/12/1997",
            "status" => "1",
            "avatar" => "images/drivers/driver.jpg",
            "rating" => 0
        ]);
        DB::table('drivers')->insert([
            "name" => "tayyab",
            "email" => "tayyab@gmail.com",
            "password" => $password,
            "gender" => "male",
            "address" => "satellite towns",
            "phone" => "03027865376",
            "area_code" => "10001",
            "dob" => "2/12/1997",
            "status" => "1",
            "avatar" => "images/drivers/driver.jpg",
            "rating" => 0
        ]);
        DB::table('drivers')->insert([
            "name" => "saleem",
            "email" => "saleem@gmail.com",
            "password" => $password,
            "gender" => "male",
            "address" => "satellite towns",
            "phone" => "03027868376",
            "area_code" => "10001",
            "dob" => "2/12/1997",
            "status" => "1",
            "avatar" => "images/drivers/driver.jpg",
            "rating" => 0
        ]);
    }
}
