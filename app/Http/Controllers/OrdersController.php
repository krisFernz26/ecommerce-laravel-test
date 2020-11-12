<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(){
    	//get all the orders
    	$orders = Order::get();
    	return view('orders.index', compact('orders'));
    }
    public function create(){
    	$orders = Order::all();
    	return view('orders.create', compact('orders'));
    }
    public function edit($postId){
    	$orders = Order::find($postId);
    	return view('order.show', compact('orders'));
    }
    public function create($postId){
    	$orders = Order::find($postId);
    	return view('orders.edit', compact('orders'));
    }

    public function store($postId){
    	$order = new Order;
    	$order->title = request()->title;
    	$post->description = request()->description;
    	$post->save();

    	return redirect('/orders')
    }

     public function update(Order $order){
    	
    	$order->title = request()->title;
    	$post->description = request()->description;
    	$post->save();

    	return redirect('/orders' .$order->id)
    }

    public function delete($postId){
    	$orders = Order::find($postId);
    	return view('orders.edit', compact('orders'));
    }

    public function destroy(Post $post){
    	$order->delete();
    	return redirect('orders'));
    }
}
