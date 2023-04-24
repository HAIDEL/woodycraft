<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $product = array(
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity')
        );

        $total_price = $product['price'] * $product['quantity'];

        if (Session::has('cart.' . $product['id'])) {
            Session::increment('cart.' . $product['id'] . '.quantity', $product['quantity']);
            Session::increment('cart.' . $product['id'] . '.total_price', $total_price);
        } else {
            Session::put('cart.' . $product['id'], array(
                'quantity' => $product['quantity'],
                'price' => $product['price'],
                'name' => $product['name'],
                'total_price' => $total_price
            ));
        }



        //return redirect()->back()->with('success', 'Product added to cart');
        return redirect('cart');
    }

    public function removeFromCart($product_id)
    {
        Session::forget('cart.' . $product_id);
        return redirect()->back()->with('success', 'Product removed from cart');
    }

    public function clearCart()
    {
        Session::forget('cart');
        return redirect()->back()->with('success', 'Cart cleared');
    }

    private function getCartItems($cart)
    {
        // Récupère les IDs de produit du panier
        $product_ids = array_keys($cart);

        // Récupère les informations des produits en fonction de leurs IDs
        $products = Product::whereIn('id', $product_ids)->get();

        $cart_items = [];

        // Constres deuit un tableau d'articl panier avec les informations des produits

        foreach ($products as $product) {
            $cart_items[] = [
                'product_id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $cart[$product->id],
                'subtotal' => $cart[$product->id] * $product->price
            ];
        }

        return $cart_items;
    }

    public function displayCart()
    {
        // Vérifie si la session du panier existe
        if (!Session::has('cart')) {
            // Si elle n'existe pas, initialise une session de panier vide
            Session::put('cart', []);
        }

        $cart = Session::get('cart');

        // Récupère les informations des produits du panier
        $cart_items = $this->getCartItems($cart);

        return view('cart', compact('cart_items'));
    }
}
