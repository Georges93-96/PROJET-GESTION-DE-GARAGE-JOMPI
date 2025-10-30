@extends('layouts.app')
@section('content')

<h1>Gestion des réparations</h1>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<form method="POST" action="{{ route('reparations.store') }}">
    @csrf

    <label>Véhicule :</label>
    <select name="vehicule_id" class="form-control">
        @foreach($vehicule as $v)
            <option value="{{ $v->id }}">{{ $v->marque }} - {{ $v->immatriculation }}</option>
        @endforeach
    </select>

    <label>Technicien :</label>
    <select name="technicien_id" class="form-control">
        <option value="">Aucun</option>
        @foreach($technicien as $t)
            <option value="{{ $t->id }}">{{ $t->nom }} {{ $t->prenom }}</option>
        @endforeach
    </select>

    <label>Date :</label>
    <input type="date" name="date" class="form-control">

    <label>Durée main d'œuvre (Heure) :</label>
    <input type="number" name="duree_main_oeuvre" class="form-control">

    <label>Objet de la réparation :</label>
    <textarea name="objet_reparation" class="form-control"></textarea>

    <button type="submit" class="btn btn-success mt-2">Enregistrer</button>
</form>

<table class="table table-bordered mt-4">
    <thead>
        <tr>
            <th>Véhicule</th>
            <th>Technicien</th>
            <th>Date</th>
            <th>Durée</th>
            <th>Objet</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reparations as $r)
        <tr>
            <td>{{ $r->vehicule->marque }} - {{ $r->vehicule->immatriculation }}</td>
            <td>{{ $r->technicien ? $r->technicien->nom . ' ' . $r->technicien->prenom : 'Non assigné' }}</td>
            <td>{{ $r->date }}</td>
            <td>{{ $r->duree_main_oeuvre ?? 'N/A' }} min</td>
            <td>{{ $r->objet_reparation }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
