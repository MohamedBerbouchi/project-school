<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StagiaireController;
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
Route::post('/stagiaires/delete/{id}',[StagiaireController::class, "delete"])->name('stagiaires.delete');

