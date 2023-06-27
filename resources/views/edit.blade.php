@extends('layouts.app')
@section('content')
<div class="card">
<div class="card-body">
    <form action="{{url('update_product/'.$products->id)}}" method="POST" enctype="multipart/form-data">
    @method("PUT")   
    @csrf
        <div class="col-md-6 mb-s">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" value="{{$products->name}}"> 
        </div>
        <div class="col-md-6 mb-s">
            <label for="">Description</label>
            <input type="text" class="form-control" name="description" value="{{$products->description}}"> 
        </div>
        <div class="col-md-6 mb-s">
            <label for="">Price</label>
            <input type="text" class="form-control" name="price" value="{{$products->price}}"> 
        </div>
        <br>
        @if($products->image)
        <img src="{{ asset('assets/uploads/products/'.$products->image) }}" width="60px" height="60px" alt=""/>
        @endif
        <br>
        <div class="col-md-6 mb-s">
            <input type="file" class="form-control" name="image"> 
        </div>
        <br>
        <br>
        <div class="col-md-6 mb-s">
            <button type="submit" class="btn btn-primary"> Update</button>
        </div>
    </form> 
</div>
</div>