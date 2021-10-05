<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct() {
        $this->middleware(['guest']);
    }
    public function index(){
        return view('auth.register');
    }

    public function store(Request $req){
        $req->validate([
            'name'=>'required|regex:/^[a-zA-Z]+$/u',
            'username'=>'required',
            'email'=>'required|email',
            'password'=> 'required|confirmed'
        ]);

        User::create([
            'name' => $req->name,
            'username'=> $req->username,
            'email'=> $req->email,
            'password'=> Hash::make($req->password)
        ]);

        auth()->attempt($req->only('email','password'));

        return redirect()->route('dashboard');
    }
}
