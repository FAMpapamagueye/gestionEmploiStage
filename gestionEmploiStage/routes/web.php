<?php

use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\StagesController;
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
    return view('welcome.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::resource('departements',DepartementController::class);
Route::resource('promos',PromotionController::class);
Route::resource('filieres',FiliereController::class);
Route::resource('apprenants',ApprenantController::class);
Route::resource('entreprises',EntrepriseController::class);
Route::resource('stages',StagesController::class);


require __DIR__.'/auth.php';
