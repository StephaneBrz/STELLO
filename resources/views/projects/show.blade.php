@extends('layout')

@section('contenu')

<div class="container">
    <div class="row align-items-start">
        
        <h2>{{ $project->name }}</h2>
        <div style="display:flex">
        <a class="btn btn-warning" href="{{ route('projects.edit', $project->id) }}">Modifier le nom du projet</a>
             <a href="{{ route('categories.create', $project->id) }}"><button class="btn btn-danger" type="submit">Ajouter une catégorie</button></a>
            <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Supprimer le projet</button> 
            </form>
        
    </div>
        <br>
                    
        <div class="container">
            <div class="row align-items-start">
            @foreach ($project->categories as $category)
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2>{{$category->name}}</h2>
                    </div>
                    <div class="card-body">
                        
                        <ul>@foreach ($category->tasks as $task)
                                <li class="card-text" style="display:flex">
                                    {{$task->name}}
                                    {{-- Bouton Ajouter --}}
                                    <a class="btn btn-primary col-4" href="{{ route('tasks.create') }}"><i class="fa-solid fa-plus"></i></a>
                                    {{-- Bouton Modifier --}}
                                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-secondary"
                                    class="btn btn-danger" type="submit"><i class="fa-solid fa-pen"></i></a>
                                
                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                    {{-- Bouton Supprimer --}}        
                                        <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash-can"></i></button> 
                                    </form>
                                </li> 
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <a href="{{ route('projects.index') }}" class="btn btn-secondary">Retour</a>
</div>

@endsection