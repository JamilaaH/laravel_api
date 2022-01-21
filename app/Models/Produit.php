<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'photo',
        'prix',
        'stock',
        'boutique_id',
    ];

    public function boutique()
    {
        return $this->belongsTo(Boutique::class);
    }

    public function commandeItem()
    {
        return $this->hasMany(CommandeItem::class, 'commande_items');
    }

    public function commande()
    {
        return $this->belongsToMany(Commande::class, 'commande_items','produit_id');

    }
}
