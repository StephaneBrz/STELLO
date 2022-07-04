@extends('layout')

@section('contenu')

<div class="container">
    <div class="row align-items-start">
        <div>
            Bonjour !
        </div>
        <hr>
        <h2>Projet: {{$project->name}}</h2>
        <img src="{{ asset('storage/'.$project->img) }}" alt="Image de couverture" style="max-width: 300px;">
        <div style="display:flex">
            <a class="btn btn-success" href="{{ route('projects.edit', $project->id) }}">Modifier le nom du projet</a>
            <a class="btn btn-primary" href="{{ route('categories.create',$project->id) }}">Créer une catégorie
            </a>
             
            <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Supprimer le projet</button> 
            </form>
        </div>
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
                        <hr>
                        {{-- Bouton Ajouter --}}
                        <a class="btn btn-primary" href="{{ route('tasks.create', [$project->id, $category->id]) }}"><i>Ajouter une tâche</i></a>
                    </div>
                    <div class="card-body">
                        
                        <ul>@foreach ($category->tasks as $task)
                                <li class="card-text" style="display:flex">
                                    {{$task->name}}
                                    
                                    {{-- Bouton Modifier --}}
                                    <a href="{{ route('tasks.edit', [$project->id, $category->id, $task->id]) }}" class="btn btn-success" type="submit"><i class="fa-solid fa-pen"></i></a>
                                
                                    <form action="{{ route('tasks.destroy', [$project->id, $category->id, $task->id]) }}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                    {{-- Bouton Supprimer --}}        
                                        <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash-can"></i></button> 
                                    </form>
                                </li> 
                            @endforeach
                        </ul>
                    </div>
                
                </div>
            @endforeach
        </div>
            
    </div>
    <hr>
    <a href="{{ route('projects.index') }}" class="btn btn-secondary">Retour</a>
</div>
@endsection
