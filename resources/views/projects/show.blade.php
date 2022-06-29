@extends('layout')

@section('contenu')

<div class="container">
    <div class="row align-items-start">
        <h2>{{ $project->name }} <a class="btn btn-warning" href="{{ route('projects.edit', $project->id) }}">Modifier le nom du projet</a></h2>
            <button class="btn btn-danger" type="submit">Ajouter une catégorie</button>
            <button class="btn btn-danger" type="submit">Ajouter une tâche</button>
       <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Supprimer le projet</button> 
        </form>
        <br>
    <a href="{{ route('projects.index') }}" class="btn btn-secondary">Retour à la liste</a>


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
                                            <button href="" class="btn btn-danger" type="submit">Modifier</button>
                                            <li class="card-text">
                                                {{$task->name}}
                                                
                                                <button class="btn btn-danger" type="submit">Ajouter une tâche</button>
                                                <button class="btn btn-danger" type="submit">Supprimer la tâche></label></button>
                                            </li> 
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                         </div>
                    </div>
            </div>
            <a href="{{ route('projects.index') }}" class="btn btn-secondary">Retour à la liste</a>

@endsection