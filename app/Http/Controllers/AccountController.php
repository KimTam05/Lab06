<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function login(){
        return view("login");
    }

    public function check_login(Request $request){
        request() ->validate([
            "email"=> "required|email",
            "password"=> "required"
        ]);
        $email = $request -> input("email");
        $password = $request -> input("password");
        

       if($email == "knt@gmail.com" && $password == "123456@"){
        $request -> session() -> put("KNTCNT2-KimNgocTam","$email");
        return redirect("/");
       } else{
        return redirect()->back()->with("error","Incorrect");
    }
    }

    public function home(){
        return view('home');
    }
}