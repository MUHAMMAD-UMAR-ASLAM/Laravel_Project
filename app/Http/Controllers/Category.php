<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class Category extends Controller
{
public function index(){
return view("AddCategory");
}
public function Add(Request $request){

    
$Category=new Categories;
$Category->Category_Name=$request->Category;
$Category->save();
return redirect("/AddCategory");

}
    //
}
