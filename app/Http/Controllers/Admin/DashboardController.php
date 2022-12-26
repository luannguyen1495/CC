<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function login(){
       return view('admin.login');
    }

    public function postLogin(Request $req){
        if (Auth::attempt($req->only('email','password'))) {
            return redirect()->route('admin');
        } else{
            dd("sai thông tin");
        }
    }
}
