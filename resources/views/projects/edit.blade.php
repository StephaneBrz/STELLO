@extends('layout')

@section('contenu')

<div class="container">
    <div class="row">
        <a href="{{ route('users.show', $user->id) }}" class="btn btn-secondary">Retour</a>
    </div>
    <div class="row">
        <div>
            Bonjour !
        </div>
        <hr>
        <form action="{{ route('users.show', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <input class="form-control" type="text" name="name" placeholder="Titre..." value="{{ $user->name ?? '' }}">
            <input class="form-control" type="text" name="email" placeholder="Titre..." value="{{ $user->email ?? '' }}">
            <input class="form-control" type="text" name="email_verified_at" placeholder="Titre..." value="{{ $user->email_verified_at ?? '' }}">
            <input class="form-control" type="text" name="password" placeholder="Titre..." value="{{ $user->password ?? '' }}">
            <button type="submit" class="btn btn-success">Valider</button>
        </form>
    </div>
</div>

@endsection