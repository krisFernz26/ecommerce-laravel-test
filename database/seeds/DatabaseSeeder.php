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
        $this->call([
        	UserTypesTableSeeder::class,
        	UsersTableSeeder::class,
        	ProductTypesTableSeeder::class,
            ProductsTableSeeder::class,
            PostsTableSeeder::class,
        	PaymentTypesTableSeeder::class,
            PaymentsTableSeeder::class,
            OrdersTableSeeder::class

        	]);
    }
}
