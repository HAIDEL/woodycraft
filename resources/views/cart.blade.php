<h1>Shopping Cart</h1>
<table>
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
                <form action="#" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $cart->id }}">
                    <input type="number" name="quantity" value="{{ $cart->quantity }}"/>
                    <input type="submit" value="Mettre à jour">
                </form>
            </td>
            <td>{{$totalProd = $cart->product->price * $cart->quantity}}€</td>
            <td>
                <form action="#" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Supprimer">
                </form>
            </td>
        </tr>
        <span hidden>{{ $total = $total+$totalProd }}</span>
    @endforeach
</table>
<p>Total : {{$total}}€</p>
<form action="#" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Supprimer le Panier">
</form>
<input type="hidden" name="total" value="{{ $total }}">
<!-- Fin Données -->

<a href="#">Commander</a>
