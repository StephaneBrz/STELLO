@extends('layout')

@section('contenu')

<div class="container">
    <div class="row">
        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Retour</a>
    </div>
    <div class="row">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <input class="form-control" type="text" name="name" placeholder="Nom de la catégorie...">
            <input type="hidden" name="project_id" value="{{$project->id}}">
            <button type="submit" class="btn btn-success">Créer la catégorie</button>
        </form>
    </div>
</div>

@endsection
