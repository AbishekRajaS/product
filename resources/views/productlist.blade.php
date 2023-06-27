@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-striped">
        <button type="button"  class="btn btn-primary" style="float:right"><a href="{{url('add') }}" class="text-light text-decoration-none">Add Product</a></button>
      
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Price</td>
                    <td>Image</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                <tr>
                     <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->price}}</td>
                    <td>
                        <img src="{{ asset('assets/uploads/products/'.$item->image) }}" width="40px" height="40px" alt="image"/>
                    </td>
                    <td>
                    <button type="button"  class="btn btn-primary"><a href="{{url('edit_product/'.$item->id)}}" class="text-light text-decoration-none">Edit</a></button>
                    <button type="button"  class="btn btn-danger"><a href="{{url('delete_product/'.$item->id)}}" class="text-light text-decoration-none">Delete</a></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="col text-center">
        <button type="button"  class="btn btn-primary"><a href="{{url('/') }}" class="text-light text-decoration-none">Home</a></button>
    </div>
</div>
</div>
@endsection