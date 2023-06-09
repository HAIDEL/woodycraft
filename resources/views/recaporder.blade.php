<!DOCTYPE html>
<html>
<head>
    <title>Récapitulatif commande</title>
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
    <h1 class="mb-4">Récapitulatif </h1>

    <div class="table-responsive">
        <table class="table cart-table">



<span hidden> {{$total=0}}</span>


@foreach($orders->commandes as $commande)

        Quantité : {{$commande->quantity}} | Produits : {{$commande->product->name}} |  Prix :  {{$commande->product->price}}€<br>
        <span hidden>
            {{$totalProd = $commande->product->price * $commande->quantity}}
            {{ $total = $total+$totalProd }}
        </span>
@endforeach

@foreach($deliverys as $delivery)


<tr>

 <td>{{ $delivery->firstname}}</td>
  <td>{{ $delivery->lastname}}</td>
    <td>{{ $delivery->add1}}</td>
    <td>{{ $delivery->city}}</td>
    <td>{{ $delivery->postcode}}</td>
     <td>{{ $delivery->phone}}</td>
   <td>{{ $delivery->email}}</td>
    <td>{{ $delivery->paiement}}</td>


</tr>
<br>
Prix total : {{$total}}

@endforeach
                </div>
        </table>
        </div>
    </div>
</div>

</html>
