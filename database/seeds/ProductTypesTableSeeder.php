<?php

use Illuminate\Database\Seeder;

class ProductTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_types = [
        	['name' => 'Clothing', 'description' => 'Clothing'],
        	['name' => 'Health and Beauty', 'description' => 'Health and Beauty'],
        	['name' => 'Furniture', 'description' => 'Furniture'],
        	['name' => 'Accessories', 'description' => 'Accessories'],
        	['name' => 'Electronics', 'description' => 'Electronics']
        ];

        DB::table('product_types')->insert($product_types);
    }
}
