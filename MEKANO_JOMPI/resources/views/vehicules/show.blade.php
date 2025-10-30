<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Voir un vehicule</title>
</head>

<body>
    @extends("layouts.app")
    @section("title", "accueil")
    @section("content")

    <div class="card mt-5">
        <div class="card-head">
            <h2>Affichage vehicule</h2>
        </div>
        <div class="card-body">
            <a href="{{ route("vehicules.index") }} " class="btn btn-info btn-sm mb-3"><i class="fa fa-arrow-left"></i>Retour </a>
            <div class="mt-4">
                <p><strong>Immatriculation:</strong>{{ $vehicule->immatriculation }}</p>
                <p><strong>Marque:</strong>{{ $vehicule->marque }}</p>
                <p><strong>modele:</strong>{{ $vehicule->modele }}</p>
                <p><strong>Couleur:</strong>{{ $vehicule->couleur }}</p>
                <p><strong>Annee:</strong>{{ $vehicule->annee }}</p>
                <p><strong>Kilometrage:</strong>{{ $vehicule->Kilometrage }}</p>
                <p><strong>Energie:</strong>{{ $vehicule->energie }}</p>
                <p><strong>Boîte:</strong>{{ $vehicule->boite }}</p>
            </div>
        </div>
    </div>




    @endsection
</body>

</html>