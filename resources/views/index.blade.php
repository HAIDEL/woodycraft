
<div class="card">
    <header class="card-header">

        <div class="select">
            <select onchange="window.location.href = this.value">
                <option value="{{ route('products.index') }}" @unless($name) selected @endunless> Toutes catégories </option>
                @foreach($categories as $category)
                    <option
                        value="{{ route('products.category', $category->name) }}" {{ $name == $category->name ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

    </header>

    <div class="row">
        <div class="col-lg-11">
            <h2>Jouets</h2>
        </div>


        @guest

            <a class="button is-info" href="{{ route('products.login') }}">Se Connecter</a>
            <a class="button is-info" href="{{ route('products.register') }}">S'inscrire</a>
        @else

            <a class="button is-info" href="{{ route('signout') }}">Se déconnecter</a>
            <a class="button is-info" href="{{ route('cart.show') }}">Panier</a>

        @endguest



    </div>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Catégorie</th>
            <th>Nom Jouet</th>
            <th>Description Jouet</th>
            <th>Prix Jouet</th>
            <th>Quantité Jouet</th>
            <th>Action</th>

        </tr>

        @foreach ($products as $index => $products)

            <tr>
                <td>{{ $products->category_id }}</td>
                <td>{{ $products->name }}</td>
                <td>{{ $products->description }}</td>
                <td>{{ $products->price }}</td>
                <td>{{ $products->quantity }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('products.show', $products->id) }}">Voir</a>

                    </form>
                    <form action="{{route('cart.add', $products->id)}}" method="POST">
                        @csrf
                        <input type="number" value="1" min="1" name="quantity">
                        <input type="submit" value="Ajouter au Panier">
                    </form>

                </td>


            </tr>
        @endforeach
    </table>

</div>
