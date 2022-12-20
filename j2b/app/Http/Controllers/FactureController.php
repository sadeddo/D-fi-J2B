<?php

namespace App\Http\Controllers;
use App\Models\Entreprise;
use App\Models\Formation;
use App\Models\User;
use App\Models\Facture;


use Illuminate\Http\Request;

class FactureController extends Controller
{
   public function show(){
       $entreprises=Entreprise::all();
       $formations=Formation::all();
       $users=User::all();
       return view('facture',compact('entreprises','formations','users'));
   }
   public function index1(Request $request){
    $facture = new Facture();
    $facture->N°Affaire=$request->N°Affaire;
    $facture->N°deStage=$request->N°deStage;
    $facture->N°BDC=$request->N°BDC;
    $facture->numéro_facture=$request->numéro_facture;
    $facture->nom_formation=$request->nom_formation;
    $facture->nom_comedien=$request->nom_comedien;
    $facture->nom_entreprise=$request->nom_entreprise;
    $facture->Adress_entreprise=$request->Adress_entreprise;
    $facture->ville_formation=$request->ville_formation;
    $facture->objet_facture=$request->objet_facture;
    $facture->départ=$request->départ;
    $facture->arrivée=$request->arrivée;
    $facture->distance=$request->distance;
    $facture->durée=$request->durée;
    $facture->carburant=$request->carburant;
    $facture->péage=$request->péage;
    $facture->indemnité_kilométrique=$request->indemnité_kilométrique;
    $facture->total=$request->total;
    $facture->save();
    return back();
    
   }
   public function index(Request $request){
    $facture=Facture::find($request->id);
    return view('/showfacture',compact('facture'));
    }
    
}
