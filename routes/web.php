<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('projects', ProjectController::class);

/**
 * Attention pour les 3 routes suivantes, si vous faites des routes spécifiques il ne faut pas utiliser
 * de ressource, il faut simplement mettre Route::get(...) ou autre
 */
Route::resource('projects/{id}/categories', CategoryController::class);

Route::resource('projects/{project_id}/categories/{category_id}/tasks', TaskController::class);

Route::resource('users', UserController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
