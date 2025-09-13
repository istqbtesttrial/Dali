<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentDashboardController;

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
})->name('home');


Auth::routes();


Route::middleware('can:admin')->group(function () {
    Route::get('/espace-admin', [AdminController::class, 'index'])->name('espace-admin');
    Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiants.index');
    Route::delete('/etudiants/{id}', [EtudiantController::class, 'destroy'])->name('etudiants.destroy');

    // formations (admin)
    Route::get('/formation/delete/{id}', [FormationController::class, 'destroy'])->name('formation.delete');
    Route::get('/formation/create', [FormationController::class, 'create'])->name('formation.create');
    Route::post('/formation/store', [FormationController::class, 'store'])->name('formation.store');
    Route::get('/formation/edit/{id}', [FormationController::class, 'edit'])->name('formation.edit');
    Route::post('/formation/update/{id}', [FormationController::class, 'update'])->name('formation.update');

    // suggestions (admin)
    Route::get('/suggestions', [SuggestionController::class, 'index'])->name('suggestions');
    Route::get('/suggestion/delete/{id}', [SuggestionController::class, 'destroy'])->name('suggestion.delete');
    Route::get('/suggestion/edit/{id}', [SuggestionController::class, 'edit'])->name('suggestion.edit');
    Route::post('/suggestion/update/{id}', [SuggestionController::class, 'update'])->name('suggestion.update');
});

// formations accessible à tous les utilisateurs authentifiés
Route::get('/formations', [FormationController::class, 'index'])->name('formations');

// suggestions (création par les utilisateurs)
Route::get('/suggestion/create', [SuggestionController::class, 'create'])->name('suggestion.create');
Route::post('/suggestion/store', [SuggestionController::class, 'store'])->name('suggestion.store');


Route::view('/about', 'about')->name('about');
Route::view('/team', 'team')->name('team');
Route::view('/testimonial', 'testimonial')->name('testimonial');
Route::view('/contact', 'contact')->name('contact');
Route::view('/espace-etudiant', 'espace-etudiant')->name('espace-etudiant');
Route::view('/espace-admin-demo', 'espace-admin-demo')->name('espace-admin-demo');

