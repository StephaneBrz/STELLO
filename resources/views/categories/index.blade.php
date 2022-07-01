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
                    <div style="display:flex">
                        {{-- Bouton Voir la catégorie --}}
                        <a class="btn btn-primary" href="{{ route('categories.show', $category->id) }}"><i class="fa-solid fa-eye"></i></a>
                        {{-- Bouton Modifier la catégorie --}}
                        <a class="btn btn-warning" href="{{ route('categories.edit', $category->id) }}"><i class="fa-solid fa-pen"></i></a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            {{-- Bouton Supprimer la catégorie --}}
                            <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                        </form>
                    </div>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>

@endsection