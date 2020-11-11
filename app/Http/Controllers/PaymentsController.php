<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    
    public function index()
    {
    	//
    	$payments = Payment::all();
    	return view ('payments.index', compact('payments'));

     }
     public function show(Payment $payment)
     {
     	return view('payments.show', compact('payment'));
     }
     public function create()
     {
        $payment_type_id = ['Cash','Card','Online Payment']; 
     	return view('payments.create', compact('payment_type_id'));
     }
     public function store()
     {
        $payment = new Payment;
        $payment->payment_type_id = Payment::find(request()->payment_type_id)->id;
        $payment->payment_amount = request()->payment_amount;
        $payment->save();
        return redirect ('/payments'); 

     }
     public function edit(Payment $payment)
     {
        $paymentTypeId = ['Cash','Card','Online Payment']; 
        return view('payments.edit',compact('payment','paymentTypeId'));

     }

    public function update(User $payment){

        $payment->payment_type_id = request()->payment_type_id;
        $payment->payment_amount = request()->payment_amount;
        $user->save();
        return redirect('/payments/'.$payment->id);
    }

    public function delete($paymentId){
        $user = Payment::find($paymentId);
        return view('payments.delete', compact('payment'));
    }

    public function destroy(Payment $payment){
        $payment->delete();
        return redirect('/payments');
    }

}
