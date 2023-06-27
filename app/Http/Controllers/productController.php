<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Validator;


class productController extends Controller
{
    function index(){
        $products = product::all();
     return view('productlist')->with('products',$products);
       
   }
   function addview(){
 return view('product');
   
}
 

  public function store(Request $request, Response $response)
  {
        $validator = Validator::make($request->all(), [
          'name'=> 'required',
          'description'=>'required',
          'price'=>'required',  
      ]);

      if($validator->fails())
      {
          return response()->json([
              'status'=>400,
              'errors'=>$validator->messages()
          ]);
      }
      else
      {
          $student = new product();
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/products/',$filename);
           
          $student->name = $request->input('name');
          $student->description = $request->input('description');
          $student->price = $request->input('price');
          $student->image = $filename;
          $student->save();
        return redirect('/product');
      }
  }

  function edit($id){
    $products = product::find($id);
 return view('edit')->with('products',$products);
   
}


public function update(Request $request,$id)
{
    $student = product::find($id);
    if($request->hasFile('image')){
        $path = 'assets/uploads/products/'.$request->image;
        if(File::exists($path)){
            File::delete($path);
        }

          $file = $request->file('image');
          $ext = $file->getClientOriginalExtension();
          $filename = time().'.'.$ext;
          $file->move('assets/uploads/products/',$filename);
          $student->image = $filename;
    }
        $student->name = $request->input('name');
        $student->description = $request->input('description');
        $student->price = $request->input('price');
   
        $student->update();
      return redirect('/product');
    
}

public function delete($id){
    $products = product::find($id);
    $path = 'assets/uploads/products/'.$products->image;
    if(File::exists($path)){
        File::delete($path);
    }
    $products->delete();
    return redirect('/product');
}
   
}
