
@extends('layouts.frontend')

@section('content')

<div class="py-5">
<div class="container">
<div class="row">
    @foreach ($products as $product)
    <div class="col-md-3">
        <div class="card">
            <img src="{{ asset('assets/uploads/products/'.$product->image) }}" alt="image"/>
            <div class="card-body">
                <h5>{{$product->name}}</h5>
                <small>{{$product->price}}</small><br>
                <a href="{{url('product_view/'.$product->id)}}">View</a>
            </div>
    </div>
    </div>
    @endforeach


</div>
</div>



</div>

@endsection