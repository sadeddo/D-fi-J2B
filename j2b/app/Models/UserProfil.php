<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfil extends Model
{
    use HasFactory;
    Public function user(){
        Return $this->belongsTo(User::class,'user_id');
        }

    protected $fillable = [
        'Photo',
        'Adress',
        'Numero_Téléphone',
        'user_id'
    ];
}
