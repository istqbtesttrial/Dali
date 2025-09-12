<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
   
    protected $fillable = ['niveau', 'specialite','formateurs', 'matieres' , 'description' ,'etudiants', 'groupe'];

   
}
