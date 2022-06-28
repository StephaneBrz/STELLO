@extends ('layout');
@section('contenu');

<div class="container">
    <div class="row">
        <a class="btn btn-primary col-4" href="{{ route('projects.create') }}">Créer un project</a>
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
                @foreach ($projects as $project)
                <tr>
                    <th>{{ $project->id }}</th>
                    <td>{{ $project->name }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('projects.show', $project->id) }}">Voir le post</a>
                        <a class="btn btn-warning" href="{{ route('projects.edit', $project->id) }}">Modifier le post</a>

                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            
                            <button class="btn btn-danger" type="submit">Supprimer le post</button>                    </td>
                        </form>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>

@endsection