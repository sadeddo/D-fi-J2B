<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\UserProfil;
use App\Models\User;
use App\Models\Formation;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class UserProfilController extends Controller
{
    /*public function add(Request $request) {
       
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $User = new UserProfil();
        $User['user_id']=Auth::user()->id; $User->Adress = request('Adress');
        $User->Numero_Téléphone = request('Numero_Téléphone');
        $imagName = time().'.'. $request->image->extension();
       
        $request->image->move(public_path('img'),$imagName);
        $User->image = $imagName;
        $User->save();
       
    
    return back();
    }*/
    public function index(Request $request){
        $user=User::find($request->id);
        return view('/showprofil',compact('user'));
    }
    public function update(Request $request){
        $user=User::find($request->id);
        $user->Adress = $request->Adress;
        $user->name = $request->name;
        $user->Numero_Téléphone = $request->Numero_Téléphone;
        if ($request->file('image')) {
           
            $file = $request->image;
            $filename = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move(public_path("img"), $filename);
            $user->update(['image' => $filename]);
        }
        

        
        $user->update();
        return view('/showprofil',compact('user'));

    }
    public function ShowUserlist(){

        $formations = Formation::all();
        $users = User::all();
        $entreprises = Entreprise::all();
        return view('users', compact('users','formations','entreprises'));
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back();

    }
    public function showw(){
        $entreprises = Entreprise::all();
        return view('facture', compact('entreprises'));
    }

}
