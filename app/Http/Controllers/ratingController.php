<?php

namespace App\Http\Controllers;

use App\Models\rating;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Validator;

class ratingController extends Controller
{
  public function add(Request $request){
   
      $star_rated = $request->product_rating;
      $product_id = $request->product_id;

      // $existing = rating::where('product_id',$product_id)->first();
      // if($existing){
      //       $existing->star_rated = $star_rated;
      //       $existing->update();
      // }else{
       rating::create([
        'product_id'=>$product_id,
        'star_rated'=>$star_rated
       ]);
      // }
      return redirect(('/product_view/'.$product_id));
  }
}
