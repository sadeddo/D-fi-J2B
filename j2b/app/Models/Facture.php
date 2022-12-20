<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    Public function user(){
        Return $this->belongsTo(User::class,'user_id');
        }
        Public function formation(){
            Return $this->belongsTo(Formation::class,'formation_id');
            }
    
    protected $fillable = [
        "N°Affaire",
        'N°deStage',
        'N°BDC',
        'numéro_facture',
        'nom_formation',
        'nom_comedien',
        'nom_entreprise',
        'Adress_entreprise',
        'ville_formation',
        'objet_facture',
        'départ',
        'arrivée',
        'distance',
        'durée',
        'carburant',
        'péage',
        'indemnité_kilométrique',
        'total',
       
    ];

}
