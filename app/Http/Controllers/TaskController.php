<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Category;
use App\Models\Project;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($project_id, $category_id)
    {
        $category = Category::findOrFail($category_id);
        $project = Project::findOrFail($project_id);
        return view('tasks.create', compact('category', 'project'));
    }

    // Enregistrer une nouvelle Categorie
    public function store(Request $request, $project_id, $category_id)
    {
        // 1. La validation
        $this->validate($request, [
            'name' => 'required|string|max:30',
        ]);

        // 2. On upload l'image dans "/storage/categories"
        $category_id = $request->input('category_id');

        // 3. On enregistre les informations du Projet
        Task::create([
            'name' => $request->input('name'),
            'category_id' => $category_id,

        ]);

        // 4. On retourne vers le Projet en cours : route("Projets.index")
        $category = Category::findOrFail($category_id);
        return view('projects.show', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function show(Task $task)
    {
        // $category = Project::with('category')->find($id);

        // coté front, je vais pouvoir utiliser une variable $post
        return view("tasks.show", compact("task"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->name = $request->input('name');
        $task->save();

        return redirect()->route('projects.show', $task->project_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect()->route('projects.show', $task->project_id);
    }
}
