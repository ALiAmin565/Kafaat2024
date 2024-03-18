<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    

public function index(Request $request)
{
    $ahmed= User::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'status' => 'company',
        'password' => $request['password'],
     
    ]);
    return view('home');
}



}
