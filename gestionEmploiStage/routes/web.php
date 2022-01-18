<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Apprenant;
use App\Http\Livewire\Departement;
use App\Http\Livewire\Filiere;


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
    return view('welcome.index');
});
// Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/departements', [Departement::class,'render'])->name('departements');
/**
 * cette route permet d'afficher l'ensemble des routes d'un département
 */
Route::get('/filieres', [Filiere::class,'render'])->name('filieres');
/**
 * Cette route permet d'afficher la liste des etudiants d'une filière
 */



require __DIR__.'/auth.php';
