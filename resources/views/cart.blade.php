

<!DOCTYPE html>
<html>
<head>
    <title>Page Panier</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }
        .cart-table {
            width: 100%;
        }
        .cart-total {
            font-weight: bold;
        }
        .checkout-btn {
            margin-top: 20px;
        }
        .home-link {
            margin-top: 20px;
        }
    </style>
</head>




<div class="container">
    <a class="btn btn-outline-dark" href="{{ route('products.index') }}">Accueil</a>
    <h1 class="mb-4">Mon Panier</h1>

    <div class="table-responsive">
        <table class="table cart-table">
    <tr>
        <td>Nom Produit</td>
        <td>Quantité</td>
        <td>Prix</td>
        <td>Action</td>
    </tr>

    <span hidden>{{$total = 0}}</span>
    @foreach($carts as $cart)
        <tr>
            <td>{{$cart->product->name}}</td>
            <td>
                <form action="{{ route('cart.update',$cart->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $cart->id }}">
                    <input type="number" name="quantity" value="{{ $cart->quantity }}"/>
                    <input type="submit" value="Mettre à jour">
                </form>
            </td>
            <td>{{$totalProd = $cart->product->price * $cart->quantity}}€</td>
            <td>
                <form action="{{ route('cart.delete', $cart->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <span hidden>{{ $total = $total+$totalProd }}</span>
    @endforeach
</table>
<p>Total : {{$total}}€</p>
<form action="{{ route('cart.clear')}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Supprimer le Panier">
</form>
<input type="hidden" name="total" value="{{ $total }}">
<!-- Fin Données -->


        <div class="text-right checkout-btn">
<a class="btn btn-primary" href="{{ route('create.order') }}">Commander</a>
        </div>

    </div>
</div>
</html>
