<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Modifier Un Vehicule</title>
</head>

<body>
    @extends("layouts.app")
    @section("title", "accueil")
    @section("content")

    <div class="card mt-5">
        <div class="card-head">
            <h2>Modification vehicule</h2>
        </div>
        <div class="card-body">
            <a href="{{ route("vehicules.index" ) }} " class="btn btn-info btn-sm mb-3"><i class="fa fa-arrow-left"></i>Retour </a>
        </div>

        <form class="row g-3" action="{{ route('vehicules.update',$vehicule->id) }}" method="POST">
            @csrf
            @method("put")
           <input type="text" name="id" style="display: none;"  value="{{ $vehicule->id }}">
           
            <div class="col-md-6">
                <label class="form-label">Immatriculation</label>
                <input type="text" name="immatriculation" class="form-control" name="immatriculation" value="{{ $vehicule->immatriculation }}">
            </div>

            <div class="col-md-6">
                <label class="form-label">Marque</label>
                <input type="texte" name="marque" class="form-control" name="marque" value="{{ $vehicule->marque }}">
            </div>

            <div class="col-12">
                <label class="form-label">Modèle</label>
                <input type="text" name="modele" class="form-control" placeholder="sassir modele" name="modele" value="{{ $vehicule->modele }}">
            </div>

            <div class="col-12">
                <label class="form-label">Couleur</label>
                <input type="text" class="form-control" name="couleur" placeholder="blanc, bleu, rouge" name="couleur" value="{{ $vehicule->couleur }}">
            </div>
            <div class="col-md-3">
                <label class="form-label">Année</label>
                <input type="number" name="annee"  value="{{ $vehicule->annee }}" min="1900" max="{{ date('Y') }}" class="form-control" required>
            </div>
            <div class="col-md-2">
                <label class="form-label">kilométrage</label>
                <input type="number" name="kilometrage"  value="{{ $vehicule->kilometrage }}"  min="0" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Energie</label>
                <select name="energie"  value="{{ $vehicule->energie }}" class="form-control" required>
                    <option value="">Choisir...</option>
                    <option value="Essence">Essence</option>
                    <option value="Diesel">Diesel</option>
                    <option value="Électrique">Électrique</option>
                    <option value="Hybride">Hybride</option>
                </select>
            </div>
            <div class="col-md-3">
                <label>Boîte de vitesses:</label>
                <select name="boite"  value="{{ $vehicule->boite }}" class="form-control" required>
                    <option value="">-- Choisir --</option>
                    <option value="Manuelle">Manuelle</option>
                    <option value="Automatique">Automatique</option>
                </select><br>

                <div class="">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
        </form><br><br>
    </div>
    @endsection
</body>

</html>