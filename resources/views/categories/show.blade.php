@extends('layout')

@section('contenu')

<div class="container">

    <div class="row">
        <h2>{{ $category->name }}</h2>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nom de la catégorie</th>
                <th scope="col">Contenu</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <th>{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Retour</a>
                        <a class="btn btn-warning" href="{{ route('categories.edit', $category->id) }}">Modifier la catégorie</a>

                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            
                            <button class="btn btn-danger" type="submit">Supprimer la tâche</button>                    
                        
                        </form>
                    </td>
                    <td>
                        {{-- @foreach($project->category as $categories)
                            {{ $category->id }}
                            <br>
                            {{ $category->content }}
                            <hr>
                        @endforeach --}}
                    </td>
                </tr>
            </tbody>
          </table>
    </div>
</div>

@endsection