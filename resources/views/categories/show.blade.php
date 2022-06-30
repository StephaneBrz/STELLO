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
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <th>{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td style="display:flex">
                        
                         {{-- Bouton modifier FontAwesome --}}
                        <a class="btn btn-warning" href="{{ route('categories.edit', $category->id) }}"><i class="fa-solid fa-pen"></i></a>

                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                             {{-- Bouton supprimer FontAwesome --}}
                            <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash-can"></i></button>                    
                        
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
          <a href="{{ route('categories.index') }}" class="btn btn-secondary">Retour</a>
    </div>
</div>

@endsection