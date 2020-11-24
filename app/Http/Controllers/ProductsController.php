<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function signIn(){

        return view('products.sign_in');
    }

    public function create(){
        $productTypes = ProductType::all();
        $quantities = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];
        return view('products.create', compact('productTypes', 'quantities'));
    }

    
    public function show($productId){
        $product = Product::find($productId);
        return view('products.show', compact('product'));
    }

    
    public function edit($productId){
        $product = Product::find($productId);
        $productTypes = ProductType::all();
        $quantities = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];
        return view('products.edit', compact('product', 'productTypes', 'quantities'));
    }

    
    public function store(){

        // Create a new Product
        $product_validation = request()->validate([
    		'name' => 'required',
        	'quantity' => 'required',
        	'image' => 'required',
        	'product_type_id' => 'required|unique:ProductType'
    	 ])

        $products = Product::create($product_validation);
        return redirect ('/products');

        /*
        $products = new Product;
        $products->name = request()->name;
        $products->quantity = request()->quantity;
        $products->image = request()->image;
        $products->product_type_id = ProductType::find(request()->product_type_id)->id;
        $products->save();
        return redirect('/products');
        */
    }

    public function update(Product $product){

    	$product_validation = request()->validate([
    		'name' => 'required',
        	'quantity' => 'required',
        	'image' => 'required',
        	'product_type_id' => 'required|unique:ProductType'
    	 ])
			 $products = Product::create($product_validation);
			 return redirect('/products/'.$product->id);

    	/*
        $product->name = request()->name;
        $product->quantity = request()->quantity;
        $product->image = request()->image;
        $product->product_type_id = ProductType::find(request()->product_type_id)->id;
        $product->save();

        return redirect('/products/'.$product->id);
        */
    }

    public function delete($productId){
        $product = Product::find($productId);
        return view('products.delete', compact('product'));
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect('/products');
    }
}
