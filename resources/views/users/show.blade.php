@extends('layout')

@section('contenu')

<div class="container">

    <div class="row">
        <div>
            Bonjour {{$user->name}}!
        </div>
        <hr>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nom de l'utilisateur</th>
                <th scope="col">Email</th>
                <th scope="col">Mot de passe</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td style="display:flex">
                       {{-- Bouton Modifier la catégorie --}}
                        <a class="btn btn-warning" href="{{ route('users.edit', $user->id) }}"><i class="fa-solid fa-pen"></i></a>

                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            {{-- Bouton Supprimer la catégorie --}}
                            <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash-can"></i></button>                    
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
          <a href="{{ route('projects.index') }}" class="btn btn-secondary">Retour</a>
    </div>
</div>

@endsection