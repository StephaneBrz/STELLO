@extends ('layout')
@section('contenu')

<div class="container">
    <div class="row">
        <div>
            Bonjour {{ Auth::user()->name }}!
        </div>
        <a class="btn btn-primary col-4" href="{{ route('tasks.create') }}">Créer une tâche</a>
    </div>
    <br>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titre</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <th>{{ $task->id }}</th>
                        <td>{{ $task->name }}</td>
                        <td style="display:flex">
                                {{-- Bouton Voir la catégorie --}}
                            <a class="btn btn-primary" href="{{ route('tasks.show', $task->id) }}"><i class="fa-solid fa-eye"></i></a>
                                {{-- Bouton modifier FontAwesome --}}
                            <a class="btn btn-warning" href="{{ route('tasks.edit', $task->id) }}"><i class="fa-solid fa-pen"></i></a>

                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
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
