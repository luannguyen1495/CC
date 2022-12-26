<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
class UserController extends Controller
{
    public function index(){
        return view('fe.pages.sigin');
    }

    public function register(Request $req){
        User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>Hash::make($req->password),
            'role'=>0
        ]);

    }

    public function login(Request $req){
        // dd($req->all());
        if (Auth::attempt($req->only('email','password'))) {
            return redirect()->route('home');
        } else{
            dd("sai thông tin");
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->back();
    }
}
