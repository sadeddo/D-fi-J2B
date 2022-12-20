<?php

namespace App\Http\Controllers;
use App\Models\Formation;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function add(Request $request){
        $formation = new Formation();
        $formation->name = request('name');
        $formation->prix = request('prix');
        $formation->Durée = request('Durée');
        $formation->Description= request('Description');
        $formation->save();
        return back();

    }
    public function show(){
       
           $formations=Formation::all();
            return view('/formations',['formations' => $formations]);
      
    }
    public function update(Request $request){
        $formation=Formation::find($request->id);
        $formation->name= $request->name;
        $formation->prix = $request->prix;
        $formation->Durée = $request->Durée;
        $formation->Description = $request->Description;
        $formation->update();
        return view('/updateFormation',compact('formation'));

    }
    public function showw(Request $request){
        $formation=Formation::find($request->id);
        return view('/showformation',compact('formation'));
    }
   
  
}
