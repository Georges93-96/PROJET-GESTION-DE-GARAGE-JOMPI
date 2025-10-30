<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Un Technicien</title>
</head>

<body>
    @extends("layouts.app")
    @section("title", "accueil")
    @section("content")

    <div class="card mt-5">
        <div class="card-head">
            <h2>Modification Techniciens</h2>
        </div>
        <div class="card-body">
            <a href="{{ route("techniciens.index" ) }} " class="btn btn-info btn-sm mb-3"><i class="fa fa-arrow-left"></i>Retour </a>
        </div>

        <form class="row g-3" action="{{ route('techniciens.update',$technicien->id) }}" method="POST">
            @csrf
            @method("put")
           <input type="text" name="id" style="display: none;"  value="{{ $technicien->id }}">
           
            <div class="col-md-3">
                <label class="form-label">Nom</label>
                <input type="text"  class="form-control" name="nom" value="{{ $technicien->nom }}">
            </div>
             <div class="col-md-3">
                <label class="form-label">Prenom</label>
                <input type="text" class="form-control" name="prenom" value="{{ $technicien->prenom }}">
            </div>

            <div class="col-md-4">
                <label class="form-label">Spécialité</label>
                <select name="specialite"  value="{{ $technicien->specialite }}" class="form-control" required>
                    <option value="">Choisir...</option>
                    <option value="Electricité">Electricité</option>
                    <option value="Soudure">Soudure</option>
                    <option value="climatissation">climatissation</option>
                    <option value="tolerie et peinture">tôlerie et peinture</option>
                    <option value="moteur">moteur</option>
                    <option value="transmission">Transmission</option>
                </select>
            </div>
                <div class="">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
        </form><br><br>
    </div>
    @endsection
</body>

</html>