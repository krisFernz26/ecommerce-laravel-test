<?php

use Illuminate\Database\Seeder;

class PaymentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
       $payment_types = [
       		['name' => 'Cash', 'description' => 'Cash on Delivery'],
       		['name' => 'Card', 'description' => 'Card'],
       		['name' => 'Bank Transfer', 'description' => 'Bank Transfer']
       		
       ];
       DB::table('payment_types')->insert($payment_types);
    }
}
