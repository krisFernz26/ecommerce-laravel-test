<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            /*$payment = [
       		'payment_type_id' => \App\PaymentType::where('name','Cash') ->first()-> id,
       		'payment_date' => Carbon::create('2020', '12', '01'),
       		'payment_amount'=> '1000'
       ];
       DB::table('payments')->insert($payment);*/
       factory(\App\Payment::class,50)->create();
    }
}
