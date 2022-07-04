@extends ('layout')
@section('contenu')


<div class="container">
    <div class="row">
        <div>
            Bonjour {{ Auth::user()->name }}!
        </div>
        <hr>
        <a class="btn btn-primary col-4" href="{{ route('projects.create') }}">Créer un projet</a>
    </div>
    <br>
    <div class="row">
        <hr>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Mes Projets</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Tâches</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->name }}</td>
                    <td></td>
                    <td></td>
                    <td style="display:flex">
                            {{-- Bouton voir FontAwesome --}}
                        <a class="btn btn-primary" href="{{ route('projects.show', $project->id) }}">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                       {{-- Bouton modifier FontAwesome --}}
                        <a class="btn btn-success" href="{{ route('projects.edit', $project->id) }}"><i class="fa-solid fa-pen"></i></a>
                    
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                         {{-- Bouton supprimer FontAwesome --}}
                            <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash-can"></i></button>
                        </form>                    
                    </td>       
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
