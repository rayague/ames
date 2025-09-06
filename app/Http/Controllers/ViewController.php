<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function catalogue()
    {
        $categories = Categorie::with('produits')->get();
        return view('catalogue', compact('categories'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function administration()
    {
        return view('dashboard.index');
    }

    public function listeCategorie()
    {
        $categories = Categorie::all();
        return view('dashboard.listeCategorie', compact('categories'));
    }

    public function listeProduit()
    {

        $produits = Produit::all();

        return view('dashboard.listeProduit', compact( 'produits'));
    }

    public function ajoutProduit()
    {

        $categories = Categorie::all();
        return view('dashboard.ajoutProduit', compact('categories'));
    }

    public function ajoutCategorie()
    {
        return view('dashboard.ajoutCategorie');
    }

    public function listeMessage()
    {

        $today = Carbon::today();

        $messagesToday = Message::whereDate('created_at', $today)->latest()->get();
        $messagesOld = Message::whereDate('created_at', '<', $today)->latest()->get();

        return view('dashboard.listeMessage', compact('messagesToday', 'messagesOld'));
    }

    public function profile_administration()
    {
        $user = Auth::user();
        return view('dashboard.profile_administration', compact('user'));
    }
}
