@extends('layout')

@section('contenu')

<div class="container">
    <div class="row">
        <div>
            Bonjour {{ Auth::user()->name }}!
        </div>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Retour</a>
    </div>
    <div class="row">
        <form action="{{ route('projects.show', $project->id) }}" method="POST">
            @csrf
            @method('PUT')

            <input class="form-control" type="text" name="name" placeholder="Titre..." value="{{ $task->name ?? '' }}">
            <button type="submit" class="btn btn-success">Modifier</button>
        </form>
    </div>
</div>

@endsection