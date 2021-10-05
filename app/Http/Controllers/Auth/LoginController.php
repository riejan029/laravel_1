<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct() {
        $this->middleware(['guest']);
    }
    public function index(){
        return view('auth.login');
    }

    public function login(Request $req){
        $req->validate([
            'email'=>'required|email',
            'password'=> 'required'
        ]);

        if(!auth()->attempt($req->only('email','password'),$req->remember)){
            return back()->with('fail','Invalid Credentials!');
        }

        return redirect()->route('dashboard');
    }
}
