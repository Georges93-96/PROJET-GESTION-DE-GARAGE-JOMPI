<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voir un vehicule</title>
</head>

<body>
    @extends("layouts.app")
    @section("title", "accueil")
    @section("content")

    <div class="card mt-5">
        <div class="card-head">
            <h2>Affichage Technicien</h2>
        </div>
        <div class="card-body">
            <a href="{{ route("techniciens.index") }} " class="btn btn-info btn-sm mb-3"><i class="fa fa-arrow-left"></i>Retour </a>
            <div class="mt-4">
                <p><strong>Nom:</strong>{{ $technicien->prenom }}</p>
                <p><strong>Prenom:</strong>{{ $technicien->prenom }}</p>
                <p><strong>modele:</strong>{{ $technicien->specialite }}</p>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>