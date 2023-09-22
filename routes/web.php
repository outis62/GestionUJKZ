<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::middleware(['auth', 'PreventBackHistory'])->group(function () {
    // Les routes protégées ici
});

Route::get('etudiantsave', [HomeController::class, 'etudiantsave'])->name('etudiantsave');
Route::post('anneeuniversitaire', [HomeController::class, 'anneeuniversitaire'])->name('anneeuniversitaire');
Route::post('cycle', [HomeController::class, 'cycle'])->name('cycle');
Route::post('filiere', [HomeController::class, 'filiere'])->name('filiere');
Route::post('niveauetude', [HomeController::class, 'niveauetude'])->name('niveauetude');
Route::post('nationalite', [HomeController::class, 'nationalite'])->name('nationalite');
Route::post('genre', [HomeController::class, 'genre'])->name('genre');
Route::post('semestre', [HomeController::class, 'semestre'])->name('semestre');
Route::post('matiere', [HomeController::class, 'matiere'])->name('matiere');

Route::get('/get-filieres', [HomeController::class, 'getfiliere'])->name('getfiliere');
Route::post('ajoutenseignant', [HomeController::class, 'ajoutenseignant'])->name('ajoutenseignant');
