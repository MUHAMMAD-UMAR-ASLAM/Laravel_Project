<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductGallery extends Controller
{
    public function index(){
        $images=product::all();
       
        return view('Productgallery')->with('images',$images);


    }
    public function add_to_Cart(REQUEST $request){
        $order=product::all();
       
        return view('order')->with('order',$order);
    
    }
}
