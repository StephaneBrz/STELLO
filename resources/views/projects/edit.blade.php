@extends('layout')

@section('contenu')

<div class="container">
    <div class="row">
        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Retour</a>
    </div>
    <div class="row">
        <form action="{{ route('projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')

            <input class="form-control" type="text" name="name" placeholder="Titre..." value="{{ $project->name ?? '' }}">
            <button type="submit" class="btn btn-success">Modifier</button>
        </form>
    </div>
</div>

@endsection