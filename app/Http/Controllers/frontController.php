<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\rating;
use App\Models\review;
use Illuminate\Http\Request;

class frontController extends Controller
{
    function index(){
        $products = product::all();
     return view('index')->with('products',$products);
       
   }

   function product_view($id){
    $products = product::find($id);
    $reviews = review::where('product_id',$products->id)->get();
    $ratings = rating::where('product_id',$products->id)->get();
    $rate_sum = rating::where('product_id',$products->id)->sum('star_rated');
    if($ratings->count()>0){
      $avg_rate =  $rate_sum/$ratings->count(); 
    }
    else{
      $avg_rate=0;
    }
    

 return view('view',compact('products','ratings','avg_rate','reviews'));
   
}
}
