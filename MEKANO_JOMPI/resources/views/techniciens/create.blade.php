<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends("layouts.app")
    @section("title", "accueil")
    @section("content")
    <h1>Liste Des Techniciens</h1>

    <form class="row g-3" action="{{ route('techniciens.store') }}" method="POST">
          @csrf
        <div class="col-md-6">
            <label  class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label  class="form-label">Prenom</label>
            <input type="text" name="prenom" class="form-control" required>
        </div>

        <div class="col-md-4">
            <label for="inputState" class="form-label">Spécialité</label>
            <select name="specialite" class="form-control" required>
                <option value="">Choisir...</option>
                <option value="Electricité">Electricité</option>
                <option value="Soudure">Soudure</option>
                <option value="Tolerie-peinture">Tolerie-Peinture</option>
                <option value="climatissation">climatissation</option>
                <option value="moteur">moteur</option>
                <option value="Transmission">Transmission</option>
            </select>
        </div>
        <div class="">
            <button type="submit" class="btn btn-primary">AJOUTER</button>
        </div>
    </form><br><br>

    <a href="{{ route("techniciens.index") }}"><button>Retour</button></a>
    @endsection
</body>

</html>