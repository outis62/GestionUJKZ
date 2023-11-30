<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParametreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TuteurController;
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

Route::get('/', [HomeController::class, 'accueil'])->name('accueil');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'home'])->name('home');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('admin', AdminController::class);
    Route::get('admin/supprimer/{user}', [AdminController::class, 'destroy'])->name('supprimeradmin');
    Route::resource('etudiantsave', EtudiantController::class);
    Route::get('listeetudiant', [EtudiantController::class, 'store'])->name('store');
    Route::post('NouvelEtudiant', [EtudiantController::class, 'ajoutetudiant'])->name('ajoutetudiant');
    Route::get('enseignantliste', [EnseignantController::class, 'enseignant'])->name('enseignant');
    Route::resource('enseignant', EnseignantController::class);
    Route::get('anneeuniversitaire', [HomeController::class, 'anneeuniversitaire'])->name('anneeuniversitaire');
    Route::post('NouvelleAnnee', [HomeController::class, 'ajoutanneeuniv'])->name('ajoutanneeuniv');
    Route::get('ListeAnneeUniversitaire', [HomeController::class, 'listeanneeuniv'])->name('listeanneeuniv');
    Route::get('cycle', [HomeController::class, 'cycle'])->name('cycle');
    Route::post('NouvelCycle', [HomeController::class, 'ajoutcycle'])->name('ajoutcycle');
    Route::get('ListeCycle', [HomeController::class, 'listecycle'])->name('listecycle');
    Route::get('filiere', [HomeController::class, 'filiere'])->name('filiere');
    Route::post('NouvelleFiliere', [HomeController::class, 'ajoutfiliere'])->name('ajoutfiliere');
    Route::get('ListeFiliere', [HomeController::class, 'ListeFiliere'])->name('ListeFiliere');
    Route::get('niveauetude', [HomeController::class, 'niveauetude'])->name('niveauetude');
    Route::post('NouvelNiveau', [HomeController::class, 'ajoutniveauetude'])->name('ajoutniveauetude');
    Route::get('listeniveauetude', [HomeController::class, 'listeniveauetude'])->name('listeniveauetude');
    Route::get('nationalite', [HomeController::class, 'nationalite'])->name('nationalite');
    Route::post('NouvelleNationalite', [HomeController::class, 'ajoutnationalite'])->name('ajoutnationalite');
    Route::get('listenationalite', [HomeController::class, 'listenationalite'])->name('listenationalite');
    Route::get('genre', [HomeController::class, 'genre'])->name('genre');
    Route::post('Nouveaugenre', [HomeController::class, 'ajoutgenre'])->name('ajoutgenre');
    Route::get('listegenre', [HomeController::class, 'listegenre'])->name('listegenre');
    Route::get('semestre', [HomeController::class, 'semestre'])->name('semestre');
    Route::post('Nouveausemestre', [HomeController::class, 'ajoutsemestre'])->name('ajoutsemestre');
    Route::get('listesemestre', [HomeController::class, 'listesemestre'])->name('listesemestre');
    Route::get('matiere', [HomeController::class, 'matiere'])->name('matiere');
    Route::post('Nouvellematiere', [HomeController::class, 'ajoutmatiere'])->name('ajoutmatiere');
    Route::get('listematiere', [HomeController::class, 'listematiere'])->name('listematiere');
    Route::get('role', [HomeController::class, 'role'])->name('role');
    Route::post('Nouveaurole', [HomeController::class, 'ajoutrole'])->name('ajoutrole');
    Route::get('listerole', [HomeController::class, 'listerole'])->name('listerole');
    Route::get('classe', [EtudiantController::class, 'classe'])->name('classe');
    Route::get('listeELN2', [EtudiantController::class, 'listeELN2'])->name('listeELN2');
    Route::get('ELN1', [EtudiantController::class, 'ListeEln1'])->name('ListeEln1');
    Route::get('ELN3', [EtudiantController::class, 'ListeEln3'])->name('ListeEln3');
    Route::get('/supprimer/{id}/filiere', [ParametreController::class, 'delete'])->name('delete');
    Route::get('supprimer/matière/{matiere}', [ParametreController::class, 'supprimermatiere'])->name('supprimermatiere');
    Route::get('supprimer/niveauetude/{niveauetude}', [ParametreController::class, 'supprimerniveau'])->name('supprimerniveau');
    Route::get('supprimer/nationalite/{nationalite}', [ParametreController::class, 'supprimernationalite'])->name('supprimernationalite');
    Route::get('supprimer/anneeuniversitaire/{anneeuniversitaire}', [ParametreController::class, 'supprimeranneeuniv'])->name('supprimeranneeuniv');
    Route::get('supprimer/genre/{genre}', [ParametreController::class, 'supprimergenre'])->name('supprimergenre');
    Route::get('supprimer/cycle/{cycle}', [ParametreController::class, 'supprimercycle'])->name('supprimercycle');
    Route::get('supprimer/semestre/{semestre}', [ParametreController::class, 'supprimersemestre'])->name('supprimersemestre');
    Route::post('AjoutNote', [EtudiantController::class, 'enregistrerNotes'])->name('enregistrerNotes');
    Route::resource('Eleve', 'App\Http\Controllers\EleveController');
    Route::get('/eleve/supprimer/{eleve}', [EleveController::class, 'destroy'])->name('supprimereleve');
    Route::resource('tuteur', TuteurController::class);
    Route::get('tuteur/supprimer/{tuteur}', [TuteurController::class, 'destroy'])->name('supprimertuteur');
    Route::get('/search-tuteurs', [EleveController::class, 'searchTuteurs'])->name('search.tuteurs');

});

require __DIR__ . '/auth.php';
Route::middleware(['auth', 'PreventBackHistory'])->group(function () {
    // Les routes protégées ici
});
