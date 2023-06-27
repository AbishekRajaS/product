

@extends('layouts.app')
@section('content')
  
    <div class="card">
        <div class="card-header">Login Form</div>
        <div class="card-body col-md-3 mb-s">
        
            <form  action= "check" method="POST">
            @csrf  
 
            <label>Email</label>
            <input type="email" name="email" id="email" class ="form-control"> </br>
 
 
            <label>Password</label>
            <input type="password" name="password" id="password" class ="form-control"> </br>
 
 
            <input type="submit" value="Login" class="btn btn-success">
 
 
            </form>
        </div>
    </div>
 
@stop