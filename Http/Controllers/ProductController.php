<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index(){

        $product = Product::all();
        //dd($product);
        $data['products'] = $product;
        $data['test'] = 'test hantar data';
        return view('product.index', $data);
    }

    public function create (){
        return view('product.create');
    }

    public function edit (){
        return view('product.edit');
}

    public function store (Request $request){
        Product:: create($request ->all());
        return redirect() ->route('product');

    
}
} 
