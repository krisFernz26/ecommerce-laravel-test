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
       		['name' => 'Cash', 'description' => 'Cash'],
       		['name' => 'Card', 'description' => 'Card'],
       		['name' => 'Online Payment', 'description' => 'Online Payment']
       		
       ];
       DB::table('payment_types')->insert($payment_types);
    }
}
