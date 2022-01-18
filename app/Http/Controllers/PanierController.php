<?php

namespace App\Http\Controllers;

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
}
