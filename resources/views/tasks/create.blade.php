@extends('layout')

@section('contenu')

<div class="container">
   
    <div class="row">
        <div>
            Bonjour {{ Auth::user()->name }}!
        </div>
        <hr>
        <h2>Catégorie: </h2>
        <form action="{{ route('tasks.store', [$project->id, $category->id]) }}" method="POST">
            @csrf
            <input class="form-control" type="text" name="name" placeholder="Nom de la tâche...">
            <br>
            <input type="hidden" name="category_id" value="{{$category->id}}">
            <br>
            <button type="submit" class="btn btn-success">Créer la tâche</button>
        </form>
    </div>
    <hr>
    <div class="row">
        <a href="{{ route('projects.show', $project->id, $category->id) }}" class="btn btn-secondary">Retour</a>
    </div>
</div>

@endsection
