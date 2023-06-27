<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
class LoginController extends Controller
{
    public function login(Request $request)
    {
        
     $credentials = $request->validate([
     'email' => ['required', 'email'],
     'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials))
        {
            return redirect('/product');
         }
          return "<h2>Username or Password Invalid!</h2>";  
       }
}
