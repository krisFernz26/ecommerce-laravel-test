<?php

namespace App\Http\Controllers;

use App\ProductType;
use Illuminate\Http\Request;

class ProductTypesController extends Controller
{
    public function index(){
        $productTypes = ProductType::all();
        return view('product_types.index', compact('productTypes'));
    }

    public function create(){
        return view('product_types.create');
    }

    
    public function show($productTypeId){
        $productType = ProductType::find($productTypeId);
        return view('product_types.show', compact('productType'));
    }

    
    public function edit($productTypeId){
        $productType = ProductType::find($productTypeId);
        return view('product_types.edit', compact('productType'));
    }

    
    public function store(){

        // Create a new productType
        $productType = new ProductType;
        $productType->name = request()->name;
        $productType->description = request()->description;
        $productType->save();

        return redirect('/product-types');
    }

    public function update(ProductType $productType){
        $productType->name = request()->name;
        $productType->description = request()->description;
        $productType->save();

        return redirect('/product-types/'.$productType->id);
    }

    public function delete($productTypeId){
        $productType = ProductType::find($productTypeId);
        return view('product_types.delete', compact('productType'));
    }

    public function destroy(ProductType $productType){
        $productType->delete();
        return redirect('/product-types');
    }
}
