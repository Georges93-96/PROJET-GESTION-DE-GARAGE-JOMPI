<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset( "assets/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>JOMPI</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div class="card-header">
    <h2>AJOUTER UN VEHICULE</h2>
    </div>
    <div class="card-body">
    <a href="{{ route("vehicules.index") }}">  <i class="fa fa-arrow-left"></i>Retour</a>
</div>
    <form class="row g-3" action="{{ route('vehicules.store') }}" method="POST">
         @csrf
        <div class="col-md-6">
            <label  class="form-label">Immatriculation</label>
            <input type="text" name="immatriculation" class="form-control" required> 
        </div>

        <div class="col-md-6">
            <label  class="form-label">Marque</label>
            <input type="texte" name="marque" class="form-control" required>
        </div>

        <div class="col-12">
            <label  class="form-label">Modèle</label>
            <input type="text" name="modele" class="form-control"  placeholder="--sassir modele--" required>
        </div>

        <div class="col-12">
            <label  class="form-label">Couleur</label>
            <input type="text" class="form-control" name="couleur" placeholder="blanc, bleu, rouge">
        </div>
        <div class="col-md-3">
            <label  class="form-label">Année</label>
            <input type="number" name="annee" min="1900" max="{{ date('Y') }}" class="form-control" required>
        </div>
        <div class="col-md-2">
            <label class="form-label">kilométrage</label>
            <input type="number" name="kilometrage" min="0" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Energie</label>
            <select name="energie" class="form-control" required>
                <option value="">Choisir...</option>
                <option value="Essence">Essence</option>
                <option value="Diesel">Diesel</option>
                <option value="Électrique">Électrique</option>
                <option value="Hybride">Hybride</option>
            </select>
        </div>
        <div class="col-md-3">
            <label>Boîte de vitesses:</label>
            <select name="boite" class="form-control" required>
                <option value="">-- Choisir --</option>
                <option value="Manuelle">Manuelle</option>
                <option value="Automatique">Automatique</option>
            </select><br>

            <div class="">
                <button type="submit" class="btn btn-outline-success">AJOUTER</button><br><br>
            </div>
            <a href="{{ route('vehicules.index') }}" class="btn btn-secondary">Annuler</a>
    </form><br><br>
    

    @endsection
    <script scr="assets/js/bootstrap.min.js"></script>
</body>

</html>