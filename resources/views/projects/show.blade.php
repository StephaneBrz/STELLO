@extends('layout')

@section('contenu')

<div class="container">

    <div class="row">
        <h2>{{ $project->name }}</h2>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nom du Projet</th>
                <th scope="col">Contenu</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <th>{{ $project->id }}</th>
                    <td>{{ $project->name }}</td>
                    <td>
                        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Retour</a>
                        <a class="btn btn-warning" href="{{ route('projects.edit', $project->id) }}">Modifier le projet</a>

                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            
                            <button class="btn btn-danger" type="submit">Supprimer le post</button>                    
                        
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