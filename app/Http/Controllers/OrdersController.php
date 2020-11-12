<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use App\Post;
use App\Payment;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(){
    	//get all the orders
    	$orders = Order::get();
    	return view('orders.index', compact('orders'));
	}
	
	public function show($orderId){
		$order = Order::find($orderId);
        return view('orders.show', compact('order'));
	}
	
    public function create(){
        $quantities = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];
		$users = User::all();
		$posts = Post::all();
    	return view('orders.create', compact('users', 'posts', 'quantities'));
    }
    public function edit($orderId){
        $quantities = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];
		$order = Order::find($orderId);
		$users = User::all();
		$posts = Post::all();
		$payments = Payment::all();
    	return view('orders.edit', compact('order', 'users', 'posts', 'payments','quantities'));
	}

    public function store(){
    	$order = new Order;
    	$order->quantity = request()->quantity;
		$order->user_id = User::find(request()->user_id)->id;
		$order->post_title = Post::find(request()->post_id)->title;
        $order->user = User::find(request()->user_id)->email;
        $order->post_id = Post::find(request()->post_id)->id;
    	$order->save();

    	return redirect('/orders');
    }

     public function update(Order $order){
    	
    	$order->quantity = request()->quantity;
        $order->user_id = User::find(request()->user_id)->id;
        $order->user = User::find(request()->user_id)->email;
        $order->post_id = Post::find(request()->post_id)->id;
        $order->payment_id = Payment::find(request()->payment_id)->id;
        $order->date_completed = Payment::find(request()->payment_id)->payment_date;
    	$order->save();

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
