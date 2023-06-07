<a class="button is-info" href="{{ route('products.index') }}">Page d'accueil</a>
<a class="button is-info" href="{{ route('profil.edit') }}">Modifier le profil</a>



<h5 class="card-title">Profil de {{ $user->name }}</h5>
<p>
    <strong>Nom </strong> : {{ $customers->forname }} <br>
    <strong>Prénom </strong> : {{ $customers->surname }} <br>
    <strong>Adresse 1 </strong> : {{ $customers->add1 }} <br>
    <strong>Adresse 2 </strong> : {{ $customers->add2 }} <br>
    <strong>Adresse 3 </strong> : {{ $customers->add3 }} <br>
    <strong>Code Postal </strong> : {{ $customers->postcode }} <br>
    <strong>Numéro de téléphone </strong> : {{ $customers->phone }} <br>
    <strong>Adresse mail </strong> : {{ $user->email }} <br>
</p>
