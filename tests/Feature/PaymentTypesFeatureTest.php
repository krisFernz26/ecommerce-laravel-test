<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaymentTypesFeatureTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function a_payment_can_be_made_through_card()
    {
    	$this->createPaymentType();
    	factory(\App\PaymentType::class)->create();
    	$this->createPaymentTypes()
    	$payment =factory(\App\Payment::class)->create();
    	$response = $this->get('/payments');
    	$this->assertSee($payment->name);
    }

    		];
    	});
