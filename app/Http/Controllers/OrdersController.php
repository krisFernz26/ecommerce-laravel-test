<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use App\Post;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(){
    	//get all the orders
    	$orders = Order::paginate(10);
    	return view('orders.index', compact('orders'));
	}
	
	public function show($orderId){
		$order = Order::find($orderId);
        return view('orders.show', compact('order'));
	}
	
    public function create(){
		$posts = Post::all();
    	return view('orders.create', compact('posts'));
    }
    public function edit($orderId){
		$order = Order::find($orderId);
		$posts = Post::all();
    	return view('orders.edit', compact('order', 'posts'));
	}

    public function store(){

    	//validate the form
    	$validated_fields = request()->validate([
    		'user_id' => 'required',
    		'post_id' => 'required'
    	]);

    	$order = Order::create($validated_fields);

    	return redirect('/orders');
    }

     public function update(Order $order){

     	//validate
    	$validate_fields = request()->validate([
    		'user_id' => 'required',
    		'post_id' => 'required'
    	]);
    	
    	$order->update($validated_fields);

    	return redirect('/orders/' .$order->id);
    }

    public function delete($orderId){
    	$order = Order::find($orderId);
    	return view('orders.delete', compact('order'));
    }

    public function destroy(Order $order){
    	$order->delete();
    	return redirect('orders');
    }
}
