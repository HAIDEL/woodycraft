<a class="button is-info" href="{{ route('adminHome') }}">Accueil</a>

<table class="table table-bordered">
    <tr>
        <th>ID Catégorie </th>
        <th>Nom Catégorie</th>
        <th>Action</th>

    </tr>

    @foreach ($categories as $index => $categories)

        <tr>
            <td>{{ $categories->id }}</td>
            <td>{{ $categories->name }}</td>

            <td>

                <a class="btn btn-primary" href="{{ route('categories.edit', $categories->id) }}">Modifier</a>
                <form action="{{ route('category.destroy', $categories->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
