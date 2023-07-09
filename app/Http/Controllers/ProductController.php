<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categories;
class ProductController extends Controller
{

    public function index(Request $request){
        $categories=Categories::all();
        return  view('AddProduct')->with("categories",$categories);


        }
    //
    public function add(Request $request)
    {
    //    $request->all();
        $path=$request->file('Image')->store('public/Product');
        $Iname=basename($path);

        $prduct= new product;
        $prduct->title=$request->title;
        $prduct->Discription=$request->Discription;
        $prduct->Category=$request->Category;
        $prduct->Image=$Iname; 
        $prduct->price=$request->price;
        $prduct->save();
        return redirect()->back()->with('message','Success!');
        
    }

}
