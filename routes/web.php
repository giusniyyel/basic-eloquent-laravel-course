<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;

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

Route::get('projects', [App\Http\Controllers\ProjectController::class, 'getAllProjects']);
Route::get('insertProject', [App\Http\Controllers\ProjectController::class, 'insertProject']);
Route::get('updateProject', [App\Http\Controllers\ProjectController::class, 'updateProject']);
Route::get('updateProjects', [App\Http\Controllers\ProjectController::class, 'updateAllInactiveProjects']);
Route::get('deleteProjects', [App\Http\Controllers\ProjectController::class, 'deleteProjects']);
Route::get('deleteFirstTenProjects', [App\Http\Controllers\ProjectController::class, 'deleteFirstTenProjects']);
