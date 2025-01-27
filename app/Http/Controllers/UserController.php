<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $formfields = $request->validate([
            "name" => "required",
            "email" => ["required", "unique:users", "email"],
            "password" => ["required", "min:6", "max:8"]
        ]);
        $formfields["password"]=bcrypt($formfields["password"]);
       $user= User::create($formfields);
        
        Auth::guard('web')->login($user);

        return redirect("/");
    }

    public function showRegister()
    {
        
        return view("users.create");
    }
    public function showLogin()
    {
        
        return view("users.login");
    }

    public function login(Request $request)
    {
        $formfields = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);
        $user=User::firstWhere([['email','=',$formfields['email']],['password','=',$formfields['password']]]);
         
     
        if($user!=null){
            // Auth::guard('web')->login($user);
            // return redirect("/");
            if(Auth::attempt($formfields)){
                $request->session()->regenerate();
                return redirect("/");
            }
        }

        return view("dashain");
        
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
