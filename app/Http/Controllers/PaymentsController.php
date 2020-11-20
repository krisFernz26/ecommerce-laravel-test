<?php

namespace App\Http\Controllers;

use App\Payment;
use App\PaymentType;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    
    public function index()
    {
    	$payments = Payment::all();
    	return view ('payments.index', compact('payments'));

     }
     public function create()
     {
        $paymentTypes = PaymentType::all();
        return view('payments.create', compact('paymentTypes'));
     }
     public function show($paymentId)
     {
        $payment = Payment::find($paymentId);
     	return view('payments.show', compact('payment'));
     }
     public function edit($paymentId)
     {
        $payment = Payment::find($paymentId);
        $paymentTypes = PaymentType::all();
        return view('payments.edit',compact('payment', 'paymentTypes'));

     }
     public function store()
     {

        $payment = new Payment;
        $payment->payment_type_id = PaymentType::find(request()->payment_type_id)->id;
        $payment->payment_date = request()->payment_date;
        $payment->payment_amount = request()->payment_amount;
        $payment->save();

        return redirect ('/payments'); 

     }
     
    public function update(Payment $payment){

        $payment->payment_type_id = PaymentType::find(request()->payment_type_id)->id;
        $payment->payment_date = request()->payment_date;
        $payment->payment_amount = request()->payment_amount;
        $payment->save();

        return redirect ('/payments/'.$payment->id); 
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
