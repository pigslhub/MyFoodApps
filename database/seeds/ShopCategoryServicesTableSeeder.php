<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopCategoryServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop_category_services_rate')->insert([
            "shop_id"=> "20000001",
            "category_id"=> "3",
            "service_id"=> "1",
        ]);
        DB::table('shop_category_services_rate')->insert([
            "shop_id"=> "20000001",
            "category_id"=> "3",
            "service_id"=> "3",
        ]);
        DB::table('shop_category_services_rate')->insert([
            "shop_id"=> "20000001",
            "category_id"=> "4",
            "service_id"=> "1",
        ]);
        DB::table('shop_category_services_rate')->insert([
            "shop_id"=> "20000001",
            "category_id"=> "4",
            "service_id"=> "3",
        ]);
        DB::table('shop_category_services_rate')->insert([
            "shop_id"=> "20000001",
            "category_id"=> "5",
            "service_id"=> "3",
        ]);
        DB::table('shop_category_services_rate')->insert([
            "shop_id"=> "20000002",
            "category_id"=> "1",
            "service_id"=> "1",
        ]);
        DB::table('shop_category_services_rate')->insert([
            "shop_id"=> "20000002",
            "category_id"=> "2",
            "service_id"=> "2",
        ]);

    }
}
