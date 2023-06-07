<?php

namespace App\Http\Controllers;


use Session;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function showProfil(User $user)
    {
        if (Auth::id()) {
            $user = auth()->user();

            $customers = Customer::where('id', $user->customers_id)->first();

            $count = Cart::where('name', $user->name)->count();

            return view('profil', compact('count', 'user', 'customers'));

        }


    }

    public function editProfil()
    {
        if (Auth::id()) {
            $user = auth()->user();

            $customers = Customer::where('id', $user->customers_id)->first();

            $count = Cart::where('name', $user->name)->count();

            return view('editprofil', compact('count', 'user', 'customers'));

        }
    }

    public function updateProfil(Request $request, $id)
    {
        if (Auth::id()) {
            $user = auth()->user();

            $request->validate([

                'forname',
                'surname',
                'add1',
                'add2',
                'add3',
                'postcode',
                'phone',
                'email'


            ]);

            $customers = Customer::query()->findOrFail($id);
            $customers->forname = $request->get('forname');
            $customers->surname = $request->get('surname');
            $customers->add1 = $request->get('add1');
            $customers->add2 = $request->get('add2');
            $customers->add3 = $request->get('add3');
            $customers->phone = $request->get('phone');
            $customers->postcode = $request->get('postcode');

            $customers->update();

            $user->email = $request->get('email');

            $user->update();

            return redirect('/user/profil')->with('info', 'Votre profil à bien été mis à jour');

        }
    }
}
