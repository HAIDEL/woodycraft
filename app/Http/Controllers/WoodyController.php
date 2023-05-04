<?php

namespace App\Http\Controllers;

use App\Models\Delivery_addresses;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class WoodyController extends BaseController
{
    public function index($name = null)
    {
        $query = $name ? Category::whereName($name)->firstOrFail()->products() : Product::query();
        $products = $query->oldest('name')->paginate(5);
        $categories = Category::all();
        return view('index', compact('products', 'name', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('create', compact('categories'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id',
            'name',
            'description',
            'price',
            'quantity'
        ]);


        $products = new product([
            'category_id' => $request->get('category_id'),
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'quantity' => $request->get('quantity')
        ]);


        $products->save();
        return redirect('/');
    }

    public function destroy($id)
    {

        $products = Product::query()->findOrFail($id);
        $products->delete();

        return back()->with('success', 'Produit supprimé avec succès');

    }

    public function edit($id)
    {
        $product = Product::query()->findOrFail($id);
        $categories = Category::all();
        return view('edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([

            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'category_id' => 'required'

        ]);
        $products = Product::query()->findOrFail($id);
        $products->name = $request->get('name');
        $products->description = $request->get('description');
        $products->price = $request->get('price');
        $products->quantity = $request->get('quantity');
        $products->category_id = $request->get('category_id');


        $products->update();

        return redirect('/')->with('success', 'Produits modifié avec succès');
    }

    public function show(Product $product)
    {
        $categories = $product->categories;
        return view('show', compact('product', 'categories'));
    }

    public function createcate()
    {
        $categories = Category::all();
        return view('createcate', compact('categories'));

    }

    public function storecate(Request $request)
    {
        $request->validate([
            'name'
        ]);
        $categories = new category([

            'name' => $request->get('name')
        ]);
        $categories->save();
        return redirect('/');
    }

    public function updatecate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $categories = Category::query()->findOrFail($id);
        $categories->name = $request->get('name');

        $categories->update();

        return redirect('/')->with('success', 'Produits modifié avec succès');
    }

    public function destroycate($id)
    {

        $categories = Category::query()->findOrFail($id);
        $categories->delete();

        return back()->with('success', 'Catégorie supprimé avec succès');

    }

    public function showcate()
    {

        $categories = Category::all();
        return view('viewcate', compact('categories'));
    }

    public function editcate($id)
    {
        $categories = Category::query()->findOrFail($id);

        return view('editcate', compact('categories'));
    }

    public function order()
    {
        return view('commande');

    }
    public function inforder()
    {
        $delivery_addresses=Delivery_addresses::all();
        return view('recaporder', compact('delivery_addresses'));

    }
    public function storder(Request $request)
    {
        $request->validate([
            'firstname',
            'lastname',
            'add1',
            'add2',
            'city',
            'postcode',
            'phone',
            'email'
        ]);


        $delivery = new Delivery_addresses([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'add1' => $request->get('add1'),
            'add2' => $request->get('add2'),
            'city' => $request->get('city'),
            'postcode' => $request->get('postcode'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email')
        ]);


        $delivery->save();
        return redirect('/');
    }
}
