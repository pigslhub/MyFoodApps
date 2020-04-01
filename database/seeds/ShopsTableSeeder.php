<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('shop123');

        DB::table('shops')->insert([
            "name" => "Imran Store",
            "owner_name" => "Imran",
            "email" => "imran@gmail.com",
            "password" => $password,
            "address" => "satellite town",
            "phone" => "123545444345",
            "area_code" => "10001",
            "avatar" => "images/shops/shop.jpg",
            "status" => "1",
            "commision" => "5",
            "shop_type_id" => "1",
            "rating" => 0
        ]);

        DB::table('shops')->insert([
            "name" => "Mujeeb Store",
            "owner_name" => "mujeeb",
            "email" => "mujeeb@gmail.com",
            "password" => $password,
            "address" => "Lahore",
            "phone" => "456356774333",
            "area_code" => "10001",
            "avatar" => "images/shops/shop.jpg",
            "status" => "1",
            "commision" => "5",
            "shop_type_id" => "1",
            "rating" => 0
        ]);
    }
}
