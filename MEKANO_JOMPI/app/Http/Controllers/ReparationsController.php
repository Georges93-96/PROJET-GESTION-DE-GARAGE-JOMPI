<?php

namespace App\Http\Controllers;

use App\Models\Reparations;
use Illuminate\Http\Request;

use App\Http\Requests\StoreReparationsRequest;
use App\Http\Requests\UpdateReparationsRequest;
use App\Models\Techniciens;
use App\Models\vehicule;

class ReparationsController extends Controller
{
 public function index()
{
    $reparations = Reparations::with(['vehicule', 'technicien'])->get();
    $vehicule = vehicule::all();
    $technicien = Techniciens::all();

    return view('reparations.index', compact('reparations', 'vehicule', 'technicien'));
}

public function store(Request $request)
{
   

   $request->validate([
    'vehicule_id' => ['required', 'exists:vehicules,id'],
    'technicien_id' => ['nullable', 'exists:techniciens,id'],
    'date' => ['required', 'date'],
    'duree_main_oeuvre' => ['nullable', 'integer'],
    'objet_reparation' => ['required', 'string'],
]);


    Reparations::create($request->all());

    return redirect()->back()->with('success', 'Réparation enregistrée avec succès !');
}

   
}
