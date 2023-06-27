<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Validator;

class reviewController extends Controller
{
    public function index($id){
        $product = product::find($id);
        return view('review',compact('product'));

    }

    public function add(Request $request)
        {
            $review = $request->review;
            $product_id = $request->product_id;
            review::create([
                'product_id'=>$product_id,
                'review'=>$review
               ]);
               return redirect(('/product_view/'.$product_id));

        }
    
}
