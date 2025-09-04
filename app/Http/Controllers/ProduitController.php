<?php

namespace App\Http\Controllers;

use Storage;
use Carbon\Carbon;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'nom' => 'required|string|max:255',
        'categorie_id' => 'required|exists:categories,id',
        'description' => 'nullable|string',
        'marque' => 'nullable|string',
        'modele' => 'nullable|string',
        'etat' => 'nullable|string',
        'quantite' => 'nullable|integer|min:0',
        'prix' => 'nullable|numeric|min:0',
        'lieu_achat' => 'nullable|string',
        'date_achat' => 'nullable|date',
        'fournisseur' => 'nullable|string',
        'photo' => 'nullable|image|max:2048', // 2MB max
    ]);

    if ($request->hasFile('photo')) {
        $imagePath = $request->file('photo')->store('produits', 'public');
        $validated['photo'] = $imagePath;
    }

    Produit::create($validated);

    return redirect()->route('produits.index')->with('success', 'Produit ajouté avec succès.');
}

// Affiche le formulaire de modification
public function edit($id)
{
    $produit = Produit::findOrFail($id);
    $categories = Categorie::all();
    if ($produit->date_achat) {
        $produit->date_achat = Carbon::parse($produit->date_achat);
    }

    return view('dashboard.produitEdition', compact('produit', 'categories'));
}

// Met à jour les infos
public function update(Request $request, $id)
{
    $produit = Produit::findOrFail($id);

    // Validation complète
    $validated = $request->validate([
        'nom' => 'required|string|max:255',
        'categorie_id' => 'required|exists:categories,id',
        'description' => 'nullable|string',
        'marque' => 'nullable|string|max:255',
        'modele' => 'nullable|string|max:255',
        'etat' => 'nullable|string|in:neuf,occasion,reconditionné',
        'quantite' => 'nullable|integer|min:0',
        'prix' => 'nullable|numeric|min:0',
        'lieu_achat' => 'nullable|string|max:255',
        'date_achat' => 'nullable|date',
        'fournisseur' => 'nullable|string|max:255',
        'photo' => 'nullable|image|max:2048', // max 2MB
    ]);

    // Gestion de la photo (si une nouvelle est uploadée)
    if ($request->hasFile('photo')) {
        // Supprimer l'ancienne photo si elle existe (optionnel)
        if ($produit->photo && \Illuminate\Support\Facades\Storage::disk('public')->exists($produit->photo)) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($produit->photo);
        }

        $imagePath = $request->file('photo')->store('produits', 'public');
        $validated['photo'] = $imagePath;
    }

    // Mettre à jour le produit avec les données validées
    $produit->update($validated);

    return redirect()->route('produits.index')->with('success', 'Produit modifié avec succès.');
}


// Supprime le produit
public function destroy($id)
{
    $produit = Produit::findOrFail($id);
    $produit->delete();

    return redirect()->route('produits.index')->with('success', 'Produit supprimé avec succès.');
}

}
