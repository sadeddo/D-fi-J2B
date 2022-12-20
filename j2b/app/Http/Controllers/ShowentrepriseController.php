<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprise;

class ShowentrepriseController extends Controller
{
    public function showEntreprise(){
        $entreprises = Entreprise::all();
        return view('facture', compact('entreprises'));
    }
    
}
