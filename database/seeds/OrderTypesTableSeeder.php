<?php

use Illuminate\Database\Seeder;

class OrderTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $order_types = [

        	['name' => 'Phone', 'description' => Phone]
        	['name' => 'Book', 'description' => Book]
        ]

        DB:table('order_types')->insert($order_types);
    }
}
