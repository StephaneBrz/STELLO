@extends('layout')

@section('contenu')

<div class="container">
    <div class="row">
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Retour</a>
    </div>
    <div class="row">
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf

            <input class="form-control" type="text" name="name" placeholder="Nom de la tâche...">

            <button type="submit" class="btn btn-success">Créer une tâche</button>
        </form>
    </div>
</div>

@endsection