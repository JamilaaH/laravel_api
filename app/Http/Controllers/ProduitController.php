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
        $add = $request->validate([
            "nom"=>'required|string',
            "description"=>'required',
            "prix"=>'required|integer',
            "photo"=>'required|file',
            "stock"=>'required|integer',
        ]);
        // $produit = new Produit();
        $user = Auth::user();
        $produit = Produit::create([
            'nom' => $add['nom'],
            'description'=> $add['description'],
            'photo'=> $add['photo']->hashName(),
            'prix' => $add['prix'],
            'stock' => $add['stock'],
            'boutique_id'=> $user->boutique->id,
    
        ]);
        Storage::put('public/', $request->file('photo'));
        return response()->json([
            "data"=>$produit,
            "message"=>"produit ajouté avec succès"
        ]);
    }
}
