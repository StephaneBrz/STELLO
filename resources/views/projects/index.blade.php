@extends ('layout')
@section('contenu')

<div class="container">
    <div class="row">
        <a class="btn btn-primary col-4" href="{{ route('projects.create') }}">Créer un projet</a>
    </div>
    <br>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Mes Projets</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->name }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('projects.show', $project->id) }}">Voir le projet</a>
                        <a class="btn btn-warning" href="{{ route('projects.edit', $project->id) }}">Modifier le projet</a>

                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            
                            <button class="btn btn-danger" type="submit">Supprimer le projet</button>
                        </form>                    
                    </td>       
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection