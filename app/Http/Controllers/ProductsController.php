<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use App\Post;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::paginate(15);
        return view('products.index', compact('products'));
    }

    public function create(){
        $productTypes = ProductType::all();
        $posts = Post::all();
        return view('products.create', compact('productTypes', 'posts'));
    }

    
    public function show($productId){
        $product = Product::find($productId);
        return view('products.show', compact('product'));
    }

    
    public function edit($productId){
        $product = Product::find($productId);
        $productTypes = ProductType::all();
        $posts = Post::all();
        return view('products.edit', compact('product', 'productTypes', 'posts'));
    }

    
    public function store(){
        // Create a new Product
        $product_validation = request()->validate([
    		'name' => 'required',
        	'quantity' => 'required',
        	'image' => 'required',
        	'product_type_id' => 'required',
        	'post_id' => 'required'
    	 ]);

        $product = Product::create($product_validation);
        return redirect ('/products');

        return redirect('/products');
    }

    public function update(Product $product){

    	$product_validation = request()->validate([
    		'name' => 'required',
        	'quantity' => 'required',
        	'image' => 'required',
        	'product_type_id' => 'required',
        	'post_id' => 'required'
    	 ]);
			 $product->update($product_validation);
			 return redirect('/products/'.$product->id);

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
