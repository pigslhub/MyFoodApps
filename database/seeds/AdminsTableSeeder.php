<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('admin123');

        DB::table('admins')->insert([
            "name"=>"admin",
            "email"=>"admin@gmail.com",
            "password"=>$password,
            "type"=>"1",
            "status"=> "1",
        ]);
    }
}
