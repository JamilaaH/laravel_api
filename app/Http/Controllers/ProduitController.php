<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProduitController extends Controller
{
    public function create()
    {
        return view('back.shop.addProduct');
    }

    public function store(Request $request)
    {
        $produit = new Produit();
        $user = Auth::user();
        $produit->nom = $request->nom;
        $produit->description = $request->description;
        $produit->photo =$request->file('photo')->hashName();
        $produit->prix = $request->prix;
        $produit->boutique_id = $user->boutique->id;
        $produit->stock = $request->stock;
        $produit->save();
        Storage::put('public/img/', $request->file('photo'));
        return redirect()->route('monshop.index');
        
    }
}
