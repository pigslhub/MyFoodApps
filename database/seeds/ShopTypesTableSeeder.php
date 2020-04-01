<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop_types')->insert([
            "type"=>"grocery store",
        ]);

        DB::table('shop_types')->insert([
            "type"=>"book shop",
        ]);

        DB::table('shop_types')->insert([
            "type"=>"carpenter",
        ]);
    }
}
