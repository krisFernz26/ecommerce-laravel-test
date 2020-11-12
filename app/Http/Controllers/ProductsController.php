<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    public function index(){
       $products = Products::get();
       return view('products.index', compact(products));

    }

    public function create(){
    	
		$quantity = ['1','2','3','4','5','6','7','8','9','10'];
        return view('products.create');
    }

    public function show(Product $product){
       $products = Products::get($productId);
       return view('products.show', compact(product));

    }
    //Create new product
    public function store(){
        $product = new Product;
        $product->productTypeId = ProductType::find(request()->productTypeId)->id;
        $product->name = request()->name;
        $product->quantity = request()->quantity;
        $product->save();

        return redirect('/products');
    }
    public function edit(Product $product){
     	$quantity = ['1','2','3','4','5','6','7','8','9','10' ];
     	return view('products.edit', compact('product'));

    }
    public function update(Product $product){

    	$product->productTypeId = ProductType::find(request()->productTypeId)->id;
    	$product->name = request()->name;
    	$product->quantity = request()->quantity;
    	$product->save();
    	return redirect('/products');

     }
     public function delete(Product $product){
     	$product->delete();
     	return redirect('/products');

     }

}
