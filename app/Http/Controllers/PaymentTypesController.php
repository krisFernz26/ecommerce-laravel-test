<?php

namespace App\Http\Controllers;

use App\PaymentType;
use Illuminate\Http\Request;

class PaymentTypesController extends Controller
{
    public function index(){
        $paymentTypes = PaymentType::all();
        return view('payment_types.index', compact('paymentTypes'));
    }

    public function create(){
        return view('payment_types.create');
    }

    
    public function show($paymentTypeId){
        $paymentType = PaymentType::find($paymentTypeId);
        return view('payment_types.show', compact('paymentType'));
    }

    
    public function edit($paymentTypeId){
        $paymentType = PaymentType::find($paymentTypeId);
        return view('payment_types.edit', compact('paymentType'));
    }

    
    public function store(){

        // Create a new paymentType
        $paymentType = new PaymentType;
        $paymentType->name = request()->name;
        $paymentType->description = request()->description;
        $paymentType->save();

        return redirect('/payment-types');
    }

    public function update(PaymentType $paymentType){
        $paymentType->name = request()->name;
        $paymentType->description = request()->description;
        $paymentType->save();

        return redirect('/payment-types/'.$paymentType->id);
    }

    public function delete($paymentTypeId){
        $paymentType = PaymentType::find($paymentTypeId);
        return view('payment_types.delete', compact('paymentType'));
    }

    public function destroy(PaymentType $paymentType){
        $paymentType->delete();
        return redirect('/payment-types');
    }
}
