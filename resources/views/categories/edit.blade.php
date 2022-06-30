@extends('layout')

@section('contenu')

<div class="container">
    <div class="row">
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Retour</a>
    </div>
    <div class="row">
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <input class="form-control" type="text" name="name" placeholder="Titre..." value="{{ $category->name ?? '' }}">
            <button type="submit" class="btn btn-success">Valider</button>
        </form>
    </div>
</div>

@endsection