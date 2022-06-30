@extends('layout')

@section('contenu')

<div class="container">
    <div class="row align-items-start">
        <h2>{{ $project->name }}<a class="btn btn-warning" href="{{ route('projects.edit', $project->id) }}">Modifier le nom du projet</a>
             <a href="{{ route('categories.create', $project->id) }}"><button class="btn btn-danger" type="submit">Ajouter une catégorie</button></a>
            <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Supprimer le projet</button> 
            </form>
        </h2>
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
                            <li class="card-text">
                                {{$task->name}}
                                <a class="btn btn-primary col-4" href="{{ route('tasks.create') }}">Créer une tâche</a>

                                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-secondary"
                                class="btn btn-danger" type="submit">Modifier</a>

                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Supprimer la tâche</button> 
                                </form>
                            
                            </li> 
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <a href="{{ route('projects.index') }}" class="btn btn-secondary">Retour à la liste</a>
</div>

@endsection