<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\MatieresController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\UtilisateurController;
use App\Models\Programme;

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
    return view('layouts.index');
});

Route::get('/home', function () {
    return view('layouts.statistique');
})->name('home');


// Routes for stagiaires
Route::get('/stagiaires',[StagiaireController::class, "index"])->name('stagiaires.index');
Route::get('/stagiaires/show/{id}',[StagiaireController::class, "show"])->name('stagiaires.show');
Route::get('/stagiaires/create',[StagiaireController::class, "create"])->name('stagiaires.create');
Route::get('/stagiaires/edit/{id}',[StagiaireController::class, "edit"])->name('stagiaires.edit');
Route::post('/stagiaires/update/{id}',[StagiaireController::class, "update"])->name('stagiaires.update');
Route::get('/stagiaires/delete/{id}',[StagiaireController::class, "delete"])->name('stagiaires.delete');
Route::get('/stagiaires/impression/{id}',[StagiaireController::class, "impression"])->name('stagiaires.impression');




// Routes for filieres
Route::get('/filieres',[FiliereController::class, "index"])->name('filieres.index');
// Route::get('/filieres/show/{id}',[FiliereController::class, "show"])->name('filieres.show');
Route::get('/filieres/create',[FiliereController::class, "create"])->name('filieres.create');
Route::get('/filieres/edit/{id}',[FiliereController::class, "edit"])->name('filieres.edit');
Route::post('/filieres/update/{id}',[FiliereController::class, "update"])->name('filieres.update');
Route::post('/filieres/delete/{id}',[FiliereController::class, "delete"])->name('filieres.delete');



// Routes for matiere
Route::get('/matieres',[MatieresController::class, "index"])->name('matieres.index');
// Route::get('/matieres/show/{id}',[MatieresController::class, "show"])->name('matieres.show');
Route::get('/matieres/create',[MatieresController::class, "create"])->name('matieres.create');
Route::get('/matieres/edit/{id}',[MatieresController::class, "edit"])->name('matieres.edit');
Route::post('/matieres/update/{id}',[MatieresController::class, "update"])->name('matieres.update');
Route::post('/matieres/delete/{id}',[MatieresController::class, "delete"])->name('matieres.delete');


// Routes for Programme  
 Route::get('/programmes',[ProgrammeController::class, "index"])->name('programmes.index');
Route::get('/programmes/create',[ProgrammeController::class, "create"])->name('programmes.create');
Route::get('/programmes/edit/{id}',[ProgrammeController::class, "edit"])->name('programmes.edit');
Route::get('/programmes/show/{id}',[ProgrammeController::class, "show"])->name('programmes.show');
Route::post('/programmes/update/{id}',[ProgrammeController::class, "update"])->name('programmes.update');
Route::post('/programmes/delete/{id}',[ProgrammeController::class, "delete"])->name('programmes.delete');

// Routes for utilisateurs  
 Route::get('/utilisateurs',[UtilisateurController::class, "index"])->name('utilisateurs.index');
Route::get('/utilisateurs/create',[UtilisateurController::class, "create"])->name('utilisateurs.create');
Route::get('/utilisateurs/edit/{id}',[UtilisateurController::class, "edit"])->name('utilisateurs.edit');
Route::get('/utilisateurs/show/{id}',[UtilisateurController::class, "show"])->name('utilisateurs.show');
Route::post('/utilisateurs/update/{id}',[UtilisateurController::class, "update"])->name('utilisateurs.update');
Route::post('/utilisateurs/delete/{id}',[UtilisateurController::class, "delete"])->name('utilisateurs.delete');