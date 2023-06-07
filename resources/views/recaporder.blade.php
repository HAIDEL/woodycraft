
<a class="button is-info" href="{{ route('products.index') }}">Page d'accueil</a> <br><br><br>

<span hidden> {{$total=0}}</span>


@foreach($orders->commandes as $commande)

        {{$commande->quantity}} | {{$commande->product->name}} {{$commande->product->price}}€<br>
        <span hidden>
            {{$totalProd = $commande->product->price * $commande->quantity}}
            {{ $total = $total+$totalProd }}
        </span>
@endforeach

@foreach($deliverys as $delivery)


<tr>

  Nom : <td>{{ $delivery->firstname}}</td><br>
  Prénom : <td>{{ $delivery->lastname}}</td><br>
    Adresse :<td>{{ $delivery->add1}}</td><br>
    Ville :<td>{{ $delivery->city}}</td><br>
    Code postale :<td>{{ $delivery->postcode}}</td><br>
    Numéro de Téléphone : <td>{{ $delivery->phone}}</td><br>
    Email : <td>{{ $delivery->email}}</td><br>
    Mode de paiement :  <td>{{ $delivery->paiement}}</td>

</tr>
<br>
Prix total : {{$total}}

@endforeach
