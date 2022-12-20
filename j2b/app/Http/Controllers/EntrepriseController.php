<?php

namespace App\Http\Controllers;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function add(Request $request){
        $entreprise = new Entreprise();
        $entreprise->name = request('name');
        $entreprise->numéro_de_téléphone = request('numéro_de_téléphone');
        $entreprise->SIRET= request('SIRET');
        $entreprise->Adress= request('Adress');
        $entreprise->save();
        return back();

    }
    public function index2(){
       
        
        return view('/facture',['entrepri'=>Entreprise::all()]);
    }
}
