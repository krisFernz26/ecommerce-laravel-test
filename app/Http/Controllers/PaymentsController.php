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
     public function create()
     {
        
        return view('payments.create');
     }
     public function show(Payment $paymentId)
     {
        $payment = Payment::find($paymentId);
     	return view('payments.show', compact('payment'));
     }
     public function edit(Payment $paymentId)
     {
        $payment = Payment::find($paymentId);
        return view('payments.edit',compact('payment'));

     }
     public function store()
     {
        $payment = new Payment;
        $payment->payment_type_id = request()->payment_types->id;
        $payment->payment_amount = request()->payment_amount;
        $payment->payment_type_id = PaymentType::find(request()->payment_types)->id;
        $payment->save();
        return redirect ('/payments'); 

     }
     
    public function update(User $payment){

        $payment = new Payment;
        $payment->payment_type_id = request()->payment_types->id;
        $payment->payment_amount = request()->payment_amount;
        $payment->payment_type_id = PaymentType::find(request()->payment_types)->id;
        $payment->save();
        return redirect ('/payments'.$payment->id); 
    }

    public function delete($paymentId){
        $payment = Payment::find($paymentId);
        return view('payments.delete', compact('payment'));
    }

    public function destroy(Payment $payment){
        $payment->delete();
        return redirect('/payments');
    }

}
