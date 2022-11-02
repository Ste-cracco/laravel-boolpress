<?php

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

Route::get('/admin', function () {
    return view('welcome');
});


Auth::routes(); // Questo metodo statico della classe Auth registra tutte le rotte legate al Log-In

// Route::middleware('auth')->get('/admin/home', 'Admin\HomeController@index')->name('admin.home');

// Il Middleware esegue controlli sulle richieste prima di mandarle al Controller
Route::middleware('auth') // Ricordarsi, in questo caso, di eliminare il constructor in 'HomeController'
    ->prefix('admin') // Prefisso sul percorso della rotta
    ->name('admin.') // Prefisso sul nome della rotta
    ->namespace('Admin') // Prefisso sul percorso del Controller
    ->group(function() {

    Route::get('/home', 'HomeController@index')->name('home');

    // Creo rotte per gestire i Post
    Route::resource('post', 'PostController'); // Ci genera tutte le 7 rotte
});


// Route di callback
// Qualsiasi sia l'URL l'Utente finirà in questa route (a meno che finisca in una rotta dell'admin )
Route::get('{any?}', function() {
    return view('guest.home');
})->where('any','.*');
