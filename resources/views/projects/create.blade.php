@extends('layout')

@section('contenu')

<div class="container">

    <div class="row">
        <div>
            Bonjour !
        </div>
        <hr>
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf

            <input class="form-control" type="text" name="name" placeholder="Nom du projet...">
            <br>
            <button type="submit" class="btn btn-success">Créer le projet</button>
        </form>
    </div>
    <br>
    <div class="row">
        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Retour</a>
    </div>


</div>

@endsection