<?php

namespace App\Http\Controllers;

use App\Models\Techniciens;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTechniciensRequest;
use App\Http\Requests\UpdateTechniciensRequest;
use App\Models\vehicule;

class TechniciensController extends Controller
{
    public function index(Request $request)
    {
         $techniciens = Techniciens::orderBy("id","ASC")->paginate(5);
        return view("techniciens.index", compact("techniciens"));
    }
    public function create(Request $request)
    {
        return view("techniciens.create");
    }
    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "specialite" => "required"
            
        ]);

        Techniciens::create([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "specialite" => $request->specialite
           
        ]);
        return redirect()->route("techniciens.index")->with("success", "techniciens ajouté avec succes");
    }
    public function show(Request $request, $id)
    {
        $technicien = Techniciens::findOrFail($id);
        return view('techniciens.show', compact('technicien'));
    }
    public function edit(Request $request, $id)
    {
        $technicien = Techniciens::findOrFail($id);
        return view('techniciens.edit', compact('technicien'));
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'specialite' => 'required'
            
        ]);
        
        $technicien = Techniciens::findOrFail($id);
        $technicien->update($request->all());

        return redirect()->route('techniciens.index')->with('success', 'Véhicule modifié avec succès');
    }
   public function destroy($id)
{
    $technicien = Techniciens::findOrFail($id);
    $technicien->delete();

    return redirect()->route('techniciens.index')->with('success', 'Véhicule supprimé avec succès');
}


 public function search(Request $request)
    {
        if (!empty($request)) {
            $search = $request->input('search');
 
            $techniciens = Techniciens::where(
                'nom',
                'like',
                "$search%"
            )
                ->orWhere('prenom', 'like', "$search%")
                ->orWhere('specialite', 'like', "$search%")
                ->paginate(5);
 
            return view('techniciens.index', compact('techniciens'));
        }
 
        $techniciens = Techniciens::table('techniciens')
            ->orderBy('id', 'DESC')
            ->paginate(5);
        return view('technicien.index', compact('techniciens'));
    }
}
