<?php

namespace App\Http\Controllers\Chaussures;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Http\Request;

class ChaussureController extends Controller
{
    //
    // set Produit page view
    public function chaussure()
    {
        
        $produits = Produit::all();
        // dd($produits);
        return view('sites.chaussures.chaussure', compact('produits'));
    }
}