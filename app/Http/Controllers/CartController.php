<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    public function ajoutCart(Request $request, $id="")
    {
        if(Auth::id())
        {
            $user=auth()->user();
            $product=product::find($id);
            $carts = Cart::all();
            foreach ($carts as $cart)
            {
                if($user->name == $cart->name && $product->id == $cart->product_id){
                    $cart->quantity=$cart->quantity+$request->quantity;
                    $cart->update();
                    return redirect()->back()->with('info', 'Quantité mis à jour');
                }
                else{
                    continue;
                }
            }


            $cart= new cart;
            $cart->name=$user->name;
            $cart->product_id=$product->id;
            $cart->quantity=$request->quantity;
            $cart->save();

            return redirect()->back()->with('info', 'Produit ajouter avec succès');
        }
        else
        {
            return redirect('login');
        }
    }


    public function showCart()
    {
        if(Auth::id())
        {
            $user = auth()->user();

            $count = Cart::where('name', $user->name)->count();

            $carts = Cart::where('name', $user->name)->get();

            $products=Product::all();


            return view('cart', compact('count', 'carts'));
        }
        else
        {
            return redirect('login');
        }
    }


}
