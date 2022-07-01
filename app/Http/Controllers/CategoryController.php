<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    // Afficher toutes les Categories
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    // Créer une nouvelle Categorie
    public function create()
    {
        $project_id = Project::all();
        return view('categories.create', compact('project_id'));
    }

    // Enregistrer une nouvelle Categorie
    public function store(Request $request)
    {
        // 1. La validation
        $this->validate($request, [
            'name' => 'required|string|max:30',
        ]);

        // 2. On upload l'image dans "/storage/categories"
        $project_id = $request->input('project_id');

        // 3. On enregistre les informations du Projet
        Category::create([
            'name' => $request->input('name'),
            'project_id' => $project_id,

        ]);

        // 4. On retourne vers le Projet en cours : route("Projets.index")
        return back()->withInput();
    }

    // Afficher une Categorie
    public function show(Category $category)
    {
        // $category = Project::with('category')->find($id);

        // coté front, je vais pouvoir utiliser une variable $post
        return view("categories.show", compact("category"));
    }

    // Editer une Categorie enregistré
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    // Mettre à jour une Categorie
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('projects.index');
    }

    // Supprimer une Categorie
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('projets.index');
    }
}
