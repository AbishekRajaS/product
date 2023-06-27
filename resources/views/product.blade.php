@extends('layouts.app')
@section('content')
<div class="card">
<div class="card-body">
    <form  action="{{url('add_product')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-3 mb-s">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name"> 
        </div>
        <div class="col-md-3 mb-s">
            <label for="">Description</label>
            <input type="text" class="form-control" name="description"> 
        </div>
        <div class="col-md-3 mb-s">
            <label for="">Price</label>
            <input type="text" class="form-control" name="price"> 
        </div>
        <div class="col-md-3 mb-s">
            <label for="">Image</label>
            <input type="file" class="form-control" name="image"> 
        </div>
        <br>
        <br>

        <div class="col-md-6 mb-s">
            <button type="submit" class="btn btn-primary"> Submit</button>
        </div>
    </form> 
</div>
</div>