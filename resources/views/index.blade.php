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
        <a class="button is-info" href="{{ route('products.create') }}">Créer un jouet</a>
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
        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ url('create') }}">Ajouter</a>
        </div>
        @foreach ($products as $index => $products)

            <tr>
                <td>{{ $products->category_id }}</td>
                <td>{{ $products->name }}</td>
                <td>{{ $products->description }}</td>
                <td>{{ $products->price }}</td>
                <td>{{ $products->quantity }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('products.show', $products->id) }}">Voir</a>
                    <a class="btn btn-primary" href="{{ route('products.edit', $products->id) }}">Modifier</a>
                    <form action="{{ route('products.destroy', $products->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>

                </td>


            </tr>
        @endforeach
    </table>

</div>