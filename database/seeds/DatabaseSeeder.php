<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(CustomersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(ShopTypesTableSeeder::class);
        $this->call(ShopsTableSeeder::class);
        // $this->call(ConversationsTableSeeder::class);
        // $this->call(ChatsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        // $this->call(ShopCategoryServicesTableSeeder::class);
        $this->call(DriversTableSeeder::class);
    }
    
}
