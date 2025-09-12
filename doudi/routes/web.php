<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiants.index');
Route::delete('/etudiants/{id}', [EtudiantController::class, 'destroy'])->name('etudiants.destroy');


//formations
Route::get('/formations', 'FormationController@index')->name('formations');
Route::get('/formation/delete/{id}', 'FormationController@destroy')->name('formation.delete');
Route::get('/formation/create', 'FormationController@create')->name('formation.create');
Route::post('/formation//store', 'FormationController@store')->name('formation.store');
Route::get('/formation/edit/{id}', 'FormationController@edit')->name('formation.edit');
Route::post('/formation/update/{id}', 'FormationController@update')->name('formation.update');

//suggestions
Route::get('/suggestions', 'SuggestionController@index')->name('suggestions');
Route::get('/suggestion/delete/{id}', 'SuggestionController@destroy')->name('suggestion.delete');
Route::get('/suggestion/create', 'SuggestionController@create')->name('suggestion.create');
Route::post('/suggestion//store', 'SuggestionController@store')->name('suggestion.store');
Route::get('/suggestion/edit/{id}', 'SuggestionController@edit')->name('suggestion.edit');
Route::post('/suggestion/update/{id}', 'SuggestionController@update')->name('suggestion.update');

