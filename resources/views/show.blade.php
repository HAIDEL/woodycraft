<h1>Produits</h1>
<table class="table table-bordered">
    <tr>
        <th>Nom du produit</th>
        <td>{{ $product->name }}</td>
    </tr>

    <tr>
        <th>Description</th>
        <td>{{ $product->description }}</td>
    </tr>

    <tr>
        <th>Prix du jouet</th>
        <td>{{ $product->price}}</td>
    </tr>

    <tr>
        <th>Quantité</th>
        <td>{{ $product->quantity }}</td>
    </tr>

</table>

<form method="POST" action="{{ route('cart.add') }}">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <label for="quantity">Quantité :</label>
    <input type="number" id="quantity" name="quantity" value="1" min="1" max="10">
    <button type="submit">Ajouter au panier</button>

</form>



