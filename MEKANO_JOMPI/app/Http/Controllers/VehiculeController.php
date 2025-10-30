<?php

namespace App\Http\Controllers;

use App\Models\vehicule;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class VehiculeController extends Controller
{
    public function index(Request $request)
    {
         $vehicules = vehicule::paginate(5);
         $vehicules = vehicule::orderBy("id","ASC")->paginate(5);
        return view("vehicules.index", compact("vehicules"));
    }
    public function create(Request $request)
    {
        return view("vehicules.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            "immatriculation" => "required",
            "marque" => "required",
            "modele" => "required",
            "couleur" => "required",
            "annee" => "required",
            "kilometrage" => "required",
            "energie" => "required",
            "boite" => "required"
        ]);

        vehicule::create([
            "immatriculation" => $request->immatriculation,
            "marque" => $request->marque,
            "modele" => $request->modele,
            "couleur" => $request->couleur,
            "annee" => $request->annee,
            "kilometrage" => $request->kilometrage,
            "energie" => $request->energie,
            "boite" => $request->boite
        ]);
        return redirect()->route("vehicules.index")->with("success", "vehicule ajouté avec succes");
    }
    public function show(Request $request, $id)
    {
        $vehicule = Vehicule::findOrFail($id);
        return view('vehicules.show', compact('vehicule'));
    }
    public function edit(Request $request, $id)
    {
        $vehicule = Vehicule::findOrFail($id);
        return view('vehicules.edit', compact('vehicule'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'immatriculation' => 'required',
            'marque' => 'required',
            'modele' => 'required',
            'couleur' => 'required',
            'annee' => 'required',
            'kilometrage' => 'required',
            'energie' => 'required',
            'boite' => 'required'
        ]);
        
        $vehicule = Vehicule::findOrFail($id);
        $vehicule->update($request->all());

        return redirect()->route('vehicules.index')->with('success', 'Véhicule modifié avec succès');
    }
   public function destroy($id)
{
    $vehicule = Vehicule::findOrFail($id);
    $vehicule->delete();

    return redirect()->route('vehicules.index')->with('success', 'Véhicule supprimé avec succès');
}

public function boot()
{
    Paginator::useBootstrapFive();
}
 public function search(Request $request)
    {
        if (!empty($request)) {
            $search = $request->input('search');
 
            $vehicules = vehicule::where(
                'marque',
                'like',
                "$search%"
            )
                ->orWhere('immatriculation', 'like', "$search%")
                ->orWhere('modele', 'like', "$search%")
                ->paginate(5);
 
            return view('vehicules.index', compact('vehicules'));
        }
 
        $vehicules = vehicule::table('vehicules')
            ->orderBy('id', 'DESC')
            ->paginate(5);
        return view('vehicule.index', compact('vehicules'));
    }
 

    
}
