<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            "name"=>"repairing",
        ]);
        DB::table('services')->insert([
            "name"=>"buying",
        ]);
        DB::table('services')->insert([
            "name"=>"selling",
        ]);
        DB::table('services')->insert([
            "name"=>"maintenance",
        ]);
        DB::table('services')->insert([
            "name"=>"replacement",
        ]);
    }
}
