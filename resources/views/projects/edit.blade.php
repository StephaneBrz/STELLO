@extends('layout')

@section('contenu')

<div class="container">

    <div class="row">
        <div>
            Bonjour {{ Auth::user()->name }}!
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
        <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data" >
                <!-- Le token CSRF -->
                @csrf
			<span>Couverture actuelle</span><br/>
			<img src="{{ asset('storage/'.$project->img) }}" alt="image de couverture actuelle" style="max-height: 200px;" >
        </form>
    </div>
    <br>
    <div class="row">
        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-secondary">Retour</a>
    </div>
</div>

@endsection
