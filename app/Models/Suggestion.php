<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    protected $fillable = ['id_user', 'niveau', 'specialite_bac', 'moyenne_g', 'moyenne_eco', 'moyenne_gestion', 'moyenne_math', 'moyenne_info', 'moyenne_fr', 'etat', 'proposition'];
   
}
