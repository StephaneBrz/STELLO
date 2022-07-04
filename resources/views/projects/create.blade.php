@extends('layout')

@section('contenu')

<div class="container">

    <div class="row">
        <div>
            Bonjour {{ Auth::user()->name }}!
        </div>
        <hr>
        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <p>
                <label for="img">Choisir :</label> <br/>
                <input class="form-control form-control-sm @if($errors->has('img')) is-invalid @endif" type="file" name="img" id="img" class="btn btn-primary mb-3">
                @if($errors->has('img'))
                <div id="validation_img" class="invalid-feedback">
                    {{$errors->first('img')}}
                </div>
                @endif
            </p>
    
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