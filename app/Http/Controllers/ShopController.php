<?php

namespace App\Http\Controllers;

use App\Models\Boutique;
use App\Models\Panier;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index()
    {
        $shop = Boutique::find(1)->with('produits')->first();
        // dd($shop);
        return response()->json([
            "message"=>"succès",
            "data"=>$shop,
        ]);
    }

    public function monshop()
    {
        $user = Auth::user();
        $mesProduits = Produit::where('boutique_id', $user->boutique->id)->get();
        return response()->json([
            'message'=>'shop affiché avec succès',
            'data' => $mesProduits,
        ]); 
        // return dd($user->boutique);
    }

    public function panier()
    {   
        $user = Auth::user();
        $panier = $user->produits;
        $total = $panier->sum('prix');
        // $produits= $panier->produit;
        return view('back.panier', compact( 'panier', 'total'));
        // return dd($panier->sum('prix'));
    }

    public function commandes()
    {
        $user = Auth::user();
        
        $commandes = $user->commandes;

        // return dd($commandes);
        return view('back.commandes', compact('commandes')); 
    }
}
