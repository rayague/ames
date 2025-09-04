<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'nom', 'categorie_id', 'description', 'marque', 'modele',
        'etat', 'quantite', 'prix', 'lieu_achat',
        'date_achat', 'fournisseur', 'photo'
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }


}
