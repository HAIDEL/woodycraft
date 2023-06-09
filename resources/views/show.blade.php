<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Voir</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .signup-box {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px 30px;
            border: 1px solid #d6d6d6;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        img {
            width: 80px;
            margin-right: 10px;
        }
        .signup-box h2 {
            font-weight: 600;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-group label {
            font-weight: 500;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        @media (min-width: 768px) {
            .signup-box {
                margin-top: 80px;
            }
        }



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
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="signup-box">

<a class="btn btn-outline-dark" href="{{ route('products.index') }}">Retour</a>

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
    <tr>
        <th>Image</th>
        <td><img src="{{ URL::to($product->image) }}"/></td>
    </tr>


</table>

<form method="POST" action="{{ route('cart.add', $product->id) }}">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <label for="quantity">Quantité :</label>
    <input type="number" id="quantity" name="quantity" value="1" min="1" max="10">
    <button type="submit" class="btn btn-primary">Ajouter au panier</button>

</form>


</div>
        </div>
    </div>
</div>

