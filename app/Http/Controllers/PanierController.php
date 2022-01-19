<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\CommandeItem;
use App\Models\Panier;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanierController extends Controller
{
    public function achat(Produit $id)
    {
        $produit = $id;
        $produit->stock = $produit->stock-1;
        $produit->save();
        $achat = new Panier();
        $achat->user_id = Auth::user()->id;
        $achat->produit_id = $produit->id;
        $achat->save();
        return redirect()->back();
        // return dd($produit);
    }

    public function commander(Request $request)
    {
        $commande = new Commande();
        $user = Auth::user();
        $commande->total = $request->total;
        $commande->user_id = $user->id;
        $commande->save();

        foreach ($request->produits as $produit) {
            $produitsCommande = new CommandeItem();
            $produitsCommande->commande_id= $commande->id;
            $produitsCommande->produit_id= $produit;
            $produitsCommande->save();
        }
        
        // $panier = Panier::all()->where('produit_id', $request->produits );
        // return dd($panier);
        return redirect()->route('commandes.index');
    }
}
