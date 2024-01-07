<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class UserController extends Controller{
    public function index(){
        return view('login.index');
    }

    public function showLinkRequestForm(){
        return view('login.forgotpassword');
    }

    public function authenticateUser(Request $request){
        $credentials = $request->only('username', 'password');

        if(Auth::attempt($credentials)){
            return redirect('/dashboard');
        }

        return redirect('/')->withErrors(['error' => 'Usuário ou senha inválidos.']);
    }

    public function sendResetPasswordEmail(Request $request){
        $request->validate(['email' => 'required|email']);
        
        $message = "Mensagem de recuperação de senha aleatória aqui.";

        return back()->with('sucess', 'Um e-mail de recuperação de senha foi enviado para sua caixa de entrada.');
    }
}