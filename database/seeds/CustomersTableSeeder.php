<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('customer123');

        DB::table('customers')->insert([
           "name"=>"shahbaz",
           "email"=>"shahbaz@gmail.com",
            "password"=>$password,
            "gender"=> "male",
            "address"=> "satellite town",
            "phone"=> "123545444345",
            "area_code"=> "55243",
            "dob"=> "2/12/1997",
            "avatar"=>"images/customers/customer.jpg",
            "status"=> "1"
        ]);
        DB::table('customers')->insert([
           "name"=>"Anas",
           "email"=>"anas@gmail.com",
            "password"=>$password,
            "gender"=> "male",
            "address"=> "Lahore",
            "phone"=> "5377734553",
            "area_code"=> "44635",
            "dob"=> "2/12/1994",
            "avatar"=>"images/customers/customer.jpg",
            "status"=> "1"
        ]);
    }
}
