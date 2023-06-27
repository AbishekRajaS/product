@extends('layouts.frontend')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5>{{$product->name}}</h5>
                <form action="{{url('add_review')}}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <textarea class="form-control" name="review" rows="5" placeholder="Write a review!!"></textarea>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
    </div>
    </div>


</div>
</div>

@endsection