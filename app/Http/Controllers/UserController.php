<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{
    public function index(){
        return view('login.index');
    }

    public function authenticateUser(Request $request){
        $credentials = $request->only('username', 'password');

        if(Auth::attempt($credentials)){
            dd("sucesso");
        }

        dd("Falha");
    }
}