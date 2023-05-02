<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function formLogin()
    {
        return view('login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'

        ]);

        $credentials=$request->only('email', 'password');
        if (Auth::attempt($credentials)){
            if (auth()->user()->is_admin ==1){
                return redirect()->route('adminHome');

            }
            else{
                return redirect()->intended()->with('info','Connecté avec succés');
            }
        }
        return redirect("login")->with('info','Caa va ca va');
}





    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }

}
