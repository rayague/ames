<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategorieController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/', [ViewController::class, 'home'] )->name('home');
route::get('/about', [ViewController::class, 'about'] )->name('about');
route::get('/catalogue', [ViewController::class, 'catalogue'] )->name('catalogue');
route::get('/contact', [ViewController::class, 'contact'] )->name('contact');

route::get('/ajout_produits', [ViewController::class, 'ajoutProduit'] )->name('produits.create');
route::get('/liste_produits', [ViewController::class, 'listeProduit'] )->name('produits.index');
route::get('/liste_catégories', [ViewController::class, 'listeCategorie'] )->name('categories.index');
route::get('/ajout_categories', [ViewController::class, 'ajoutCategorie'] )->name('categories.create');
route::get('/liste_messages', [ViewController::class, 'listeMessage'] )->name('messages.index');
route::get('/profil_administration', [ViewController::class, 'profile_administration'] )->name('profil.show');



Route::post('/produits', [ProduitController::class, 'store'])->name('produits.store');
Route::get('/produits/{id}/edit', [ProduitController::class, 'edit'])->name('produits.edit');
Route::put('/produits/{id}', [ProduitController::class, 'update'])->name('produits.update');
Route::delete('/produits/{id}', [ProduitController::class, 'destroy'])->name('produits.destroy');


// Liste des catégories
// Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');

// Formulaire ajout catégorie
// Route::get('/categories/create', [CategorieController::class, 'create'])->name('categories.create');

// Enregistrer nouvelle catégorie
Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store');

// Formulaire édition catégorie
Route::get('/categories/{id}/edit', [CategorieController::class, 'edit'])->name('categories.edit');

// Mettre à jour catégorie
Route::put('/categories/{id}', [CategorieController::class, 'update'])->name('categories.update');

// Supprimer catégorie
Route::delete('/categories/{id}', [CategorieController::class, 'destroy'])->name('categories.destroy');

Route::post('/envoi_contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/ames_administration', [ViewController::class, 'administration'] )->middleware(['auth', 'verified'])->name('administration');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
