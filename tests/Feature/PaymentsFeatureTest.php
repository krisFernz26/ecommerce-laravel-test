<?php

namespace Tests\Feature;

use DB;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use UserTypesTableSeeder;
use ProductTypesTableSeeder;

class PaymentsFeatureTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    function a_user_will_be_able_to_see_all_payments()
    {
        //given
            // user must exist
            $this->createUserType();
            $user = factory(\App\User::class)->create();
            //login the user
            $this->loginUser($user);
            // a payment must exist
            $this->createPaymentTypes();
            $payments = factory(\App\Payment::class,2)->create();
        //when
            // when i visit route /payments
            $response = $this->get('/payments');
        //then
            // i expect to see the payments' amount
            $response->assertSee($payments[0]->payment_amount);
            $response->assertSee($payments[0]->payment_amount);

    }
    public function loginUser($user)
    {
        $this->actingAs($user);
    }
     public function createUserType()
    {
         $user_types = [
            ['name' => 'Admin', 'description' => 'First user'],
            ['name' => 'Seller', 'description' => 'Second user'],
            ['name' => 'Buyer', 'description' => 'Third user'],
            
        ];
        DB:table('users_type')->insert('$user_types');
    }

    /** @test */
    function a_user_can_add_a_new_payment()
    {
        //given
            //one user
            //user is logged in
            //payment types must exist
            //create a payment
        $this->createUserType();
        $user = factory(\App\User::class)->create();
        $this->loginUser($user);
        $this->createPaymentTypes();
        $this->seed(PaymentTypesTableSeeder::class)
        $new_payment = factory(\App\Payment::class)->make()->toArray();

        //when
            //post to route /payments
            $this->post('/payments', $new_payment);
        //then
            //i expect to be redirected to /payments
            //i expect to see the payment in the database
        $response->assertRedirect('/payments');
        $this->assertDatabaseHas('payments',$new_payment);

    }
    /** @test */
    function a_user_can_update_a_payment()
    {
        //given
            //one user
            //user is logged in
            //payment types must exist
            //update a payment
        $this->createUserType();
        $user = factory(\App\User::class)->create();
        $this->loginUser($user);
        $this->createPaymentTypes();
        $update_payment = factory(\App\Payment::class)->make()->toArray();

        //when
            //update to route /payments/{payment}
            $response = $this->update('/payments', .$payment->id, $update_payment);
        //then
            //i expect to be redirected to /payments
            //i expect to see the payment in the database
        $response->assertRedirect('/payments'.$payment->id);
        $this->assertDatabaseHas('payments',$update_payment);
    }

    /** @test */
    function a_user_can_delete_a_payment()
    {
        //given
            //one user
            //user is logged in
            //payment types must exist
            //delete a payment
        $this->createUserType();
        $user = factory(\App\User::class)->create();
        $this->loginUser($user);
        $this->createPaymentTypes();
        $delete_payment = factory(\App\Payment::class)->make()->toArray();

        //when
            //update to delete /payments/{payment}
            $response = $this->destroy('/payments', .$payment->id, $delete_payment);
        //then
            //i expect to be redirected to /payments
            //i expect to see the payment in the database
        $response->assertRedirect('/payments'.$payment->id);
        $this->assertDatabaseHas('payments',$delete_payment);
    }
    
}
