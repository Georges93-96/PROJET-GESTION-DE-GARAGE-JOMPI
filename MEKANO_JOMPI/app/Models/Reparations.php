<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparations extends Model
{
  
    protected $fillable = [
        'vehicule_id',
        'technicien_id',
        'date',
        'duree_main_oeuvre',
        'objet_reparation',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class);
    }

    public function technicien()
    {
        return $this->belongsTo(Techniciens::class);
    }
}
