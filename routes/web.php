<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/recipes',[RecipeController::class , 'recipes']);
Route::get('/recipes/{search}',[RecipeController::class , 'recipes']);
Route::get('/recipe/{id}', [RecipeController::class , 'singleRecipe']);
Route::post('/create', [RecipeController::class , 'store']);
Route::get('/delete/{id}', [RecipeController::class , 'delete']);
Route::get('/update/{id}', [RecipeController::class , 'update']);
Route::post('/update/{id}', [RecipeController::class , 'saveRecord']);
Route::get('/create', [RecipeController::class , 'create']);
