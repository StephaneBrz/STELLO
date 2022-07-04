@extends('layout')

@section('contenu')

<div class="container">

    <div class="row">
        <div>
            Bonjour {{ Auth::user()->name }}!
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nom de la tâche</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $task->name }}</td>
                    <td style="display:flex">
                       {{-- Bouton Modifier la catégorie --}}
                        <a class="btn btn-warning" href="{{ route('tasks.edit', $task->id) }}"><i class="fa-solid fa-pen"></i></a>

                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            {{-- Bouton Supprimer la catégorie --}}
                            <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash-can"></i></button>                    
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
          <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Retour</a>
    </div>
</div>

@endsection