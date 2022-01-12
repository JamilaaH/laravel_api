<?php

namespace App\Http\Controllers;

use App\Models\Boutique;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $shop = Boutique::find(1)->with('produits')->first();
        // dd($shop);
        return view('home', compact('shop'));
    }
}
