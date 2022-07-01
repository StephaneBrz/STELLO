@extends('layout')

@section('contenu')

<div class="container">
    <div class="row">
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Retour</a>
    </div>
    <br>
    <div class="row">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <input class="form-control" type="text" name="name" placeholder="Nom de l'utilisateur...">
            <br>
            <input class="form-control" type="email" name="email" placeholder="Email...">
            <br>
            <input class="form-control" type="password" name="password" placeholder="Mot de passe ...">
            <br>
            <button type="submit" class="btn btn-success">Créer un utilisateur</button>
        </form>
    </div>
</div>

@endsection