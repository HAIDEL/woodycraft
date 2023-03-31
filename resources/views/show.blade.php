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
