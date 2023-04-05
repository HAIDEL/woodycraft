<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use App\Models\Customer;
class RegisterController extends Controller
{

    public function formRegister()
    {
        return view('register');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'forname' => 'required',
            'surname' => 'required',
            'add1' => 'required',
            'add2',
            'add3',
            'phone' => 'required',
            'postcode' => 'required',
            'email' => 'required',
            'name' => 'required',
            'password' =>'required'

        ]);

        $hashMdp = Hash::make($request['password']);

        $customers = new customer([
            'forname' => $request->get('forname'),
            'surname' => $request->get('surname'),
            'add1' => $request->get('add1'),
            'add2' => $request->get('add2'),
            'add3' => $request->get('add3'),
            'phone' => $request->get('phone'),
            'postcode' => $request->get('postcode'),


        ]);


        $customers->save();

        $idNewClient = Customer::latest()->first()->id;

        $users = new user([
            'customers_id' => $idNewClient,
            'email'=>$request->get('email'),
            'name'=>$request->get('name'),
            'password'=>$hashMdp,
        ]);
        $users->save();

        return redirect('/')->with('info', 'Inscrit avec succès');
    }

    //
}
