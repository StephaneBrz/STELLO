@extends ('layout')
@section('contenu')

<div class="container">
    <div class="row">
        <a class="btn btn-primary col-4" href="{{ route('categories.create') }}">Créer une catégorie</a>
    </div>
    <br>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titre</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <th>{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('categories.show', $category->id) }}">Voir la catégorie</a>
                        <a class="btn btn-warning" href="{{ route('categories.edit', $category->id) }}">Modifier la catégorie</a>

                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            
                            <button class="btn btn-danger" type="submit">Supprimer la catégorie</button>                    </td>
                        </form>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>

@endsection