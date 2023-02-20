<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

use App\Models\procuct;

class productCrud extends Controller
{

  
    public function product_view(){
        return view('index');

    }

    public function addProduct(Request $request){
      
       $request->validate(
                  [
                    'name'=>'required|unique:products',
                    'price'=>'required',
                  ],
                  [
                    'name.required'=>'Name is Required',
                    'name.unique'=>'Product Already Exists',
                    'price.required'=>'price is Requred'
                  ]

       );

      $product= new procuct();
      $product->name=$request->name;
      $product->prce=$request->price;
      $product->save();
    }
}

