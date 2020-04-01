<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConversationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('conversations')->insert([
                "personone"=> "shahbaz",
                "persontwo"=> "imran",
                "persononeid"=> "1",
                "persontwoid"=> "20000001"
            ]);

            DB::table('conversations')->insert([
                "personone"=> "anas",
                "persontwo"=> "mujeeb",
                "persononeid"=> "2",
                "persontwoid"=> "20000002"
            ]);

    }
}
