<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vehicule extends Model
{
    protected $fillable = [
        'immatriculation',
        'marque',
        'modele',
        'couleur',
        'annee',
        'kilometrage',
        'carrosserie',
        'energie',
        'boite',
    ];

}
