@extends('layout')

@section('contenu')

<div class="container">
    <div class="row">
        <div>
            Bonjour {{$user->name}}!
        </div>
        <hr>
        <form action="{{ route('users.show', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="">Nom:</label>
            <br>
            <input class="form-control" type="text" name="name" placeholder="Titre..." value="{{ $user->name ?? '' }}">
            <br>
            <label for="">Email:</label>
            <br>
            <input class="form-control" type="text" name="email" placeholder="Titre..." value="{{ $user->email ?? '' }}">
            <br>
            <label for="">Mot de passe:</label>
            <br>
            <input class="form-control" type="text" name="password" placeholder="Titre..." value="{{ $user->password ?? '' }}">
            <br>
            <button type="submit" class="btn btn-success">Modifier</button>
        </form>
    </div>
    <hr>
    <div class="row">
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Retour</a>
    </div>
</div>

@endsection