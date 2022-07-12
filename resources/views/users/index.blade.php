@extends ('layout')
@section('contenu')

<div class="container">

    <div class="row">
        <div>
            Bonjour {{$user->name ?? ''}}!
        </div>
        <hr>
        <a class="btn btn-primary col-4" href="{{ route('users.edit', $user->id ?? 1) }}">Modifier mes informations</a>
    </div>
    <br>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Mot de passe</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <th>{{ $user->id ?? '' }}</th>
                    <td>{{ $user->name ?? '' }}</td>
                    <td>{{ $user->email ?? '' }}</td>
                    <td>{{ $user->password ?? '' }}</td>
                    <td style="display:flex">
                            {{-- Bouton modifier FontAwesome --}}
                        <a class="btn btn-warning" href="{{ route('users.edit', $user->id ?? 1) }}"><i class="fa-solid fa-pen"></i></a>

                        <form action="{{ route('users.destroy', $user->id ?? 1) }}" method="POST">
                            @csrf
                            @method('DELETE')
                             {{-- Bouton supprimer FontAwesome --}}
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
