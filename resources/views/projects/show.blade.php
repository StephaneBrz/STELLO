@extends('layout')

@section('contenu')

<div class="container">

    <div class="row">
        <h2>{{ $project->name }}</h2>
        <a class="btn btn-warning" href="{{ route('projects.edit', $project->id) }}">Modifier le nom du projet</a>
        <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Supprimer le projet</button> 
        </form>
        <table class="table">
            <tbody>
                <tr>
                    <td>
                        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Retour à la liste</a>
                    </td>
                    
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
                                         
                                             <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-secondary"
                                             class="btn btn-danger" type="submit">Modifier
                                        </a>
                                         {{-- <a href="{{ route('projects.index') }}" class="btn btn-secondary" --}}
                                         <button class="btn btn-danger" type="submit">Supprimer</button></a>
                                         {{-- </a> --}}   
                                        </li> 
                                        @endforeach
                                    </ul>
                                </div>
                              </div>
                            @endforeach




                    <td>
                    </td>
                </tr>
            </tbody>
          </table>
    </div>
</div>

@endsection