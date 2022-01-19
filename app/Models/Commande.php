<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commandeItem()
    {
        return $this->hasMany(CommandeItem::class, 'commande_id');
    }

    public function produits()
    {
        return $this->belongsToMany(Produit::class, 'commande_items','commande_id');
    }
}
