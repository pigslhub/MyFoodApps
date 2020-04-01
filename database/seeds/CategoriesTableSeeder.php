<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            "name"=>"laptop",
        ]);
        DB::table('categories')->insert([
            "name"=>"mobile phone",
        ]);
        DB::table('categories')->insert([
            "name"=>"chair",
        ]);
        DB::table('categories')->insert([
            "name"=>"table",
        ]);
        DB::table('categories')->insert([
            "name"=>"door",
        ]);

    }
}
