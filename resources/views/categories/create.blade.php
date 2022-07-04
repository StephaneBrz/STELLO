@extends('layout')

@section('contenu')

<div class="container">
   
    <div class="row">
        <div>
            Bonjour {{ Auth::user()->name }}!
        </div>
        <hr>
        <h2>Catégorie: </h2>
        <form action="{{ route('categories.store', $project->id) }}" method="POST">
            @csrf
            <input class="form-control" type="text" name="name" placeholder="Nom de la catégorie...">
            <br>
            <input type="hidden" name="project_id" value="{{$project->id}}">
            <br>
            <button type="submit" class="btn btn-success">Créer la catégorie</button>
        </form>
    </div>
    <hr>
    <div class="row">
        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-secondary">Retour</a>
    </div>
</div>

@endsection
