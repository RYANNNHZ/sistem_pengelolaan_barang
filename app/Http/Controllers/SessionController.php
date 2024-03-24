<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function index(){
        return view('content.auth.index');
    }

    public function register(Request $request){

    }

    public function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'anda wajib memasuka email',
            'password.required'=>'anda wajib memasuka password',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/products')->with('suksesLogin','anda berhasil login');
        }else{
            return redirect('/')->withErrors('login yang anda lakukan tidak valid');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
