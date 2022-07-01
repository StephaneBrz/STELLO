@extends('layout')

@section('contenu')

<div class="container">

    <div class="row">
        <div>
            Bonjour !
        </div>
        <hr>
        <h2>Nom du projet:</h2>
        <form action="{{ route('projects.show', $project->id) }}" method="POST">
            @csrf
            @method('PUT')

            <input class="form-control" type="text" name="name" placeholder="Titre..." value="{{ $project->name ?? '' }}">
            <br>
            <button type="submit" class="btn btn-success">Valider</button>
        </form>

    </div>
    <br>
    <div class="row">
        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-secondary">Retour</a>
    </div>
</div>

@endsection