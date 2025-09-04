<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $categories = Categorie::all();
    //     return view('categories.index', compact('categories'));
    // }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nom' => 'required|unique:categories,nom']);
        Categorie::create(['nom' => $request->nom]);

        return redirect()->route('categories.index')->with('success', 'Catégorie ajoutée');
    }

    public function edit($id)
    {
        $categorie = Categorie::findOrFail($id);
        return view('dashboard.categorieEdition', compact('categorie'));
    }

    public function update(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($id);
        $request->validate(['nom' => 'required|unique:categories,nom,' . $categorie->id]);

        $categorie->update(['nom' => $request->nom]);
        return redirect()->route('categories.index')->with('success', 'Catégorie mise à jour');
    }

    public function destroy($id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();

        return redirect()->route('categories.index')->with('success', 'Catégorie supprimée');
    }

    /**
     * Show the form for editing the specified resource.
     */

}
