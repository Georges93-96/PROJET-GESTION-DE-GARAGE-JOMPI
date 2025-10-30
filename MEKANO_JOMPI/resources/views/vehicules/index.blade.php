<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset( "assets/css/bootstrap.min.css") }}">
    <img src="..." class="img-fluid" alt="...">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>ajout vehicule</title>
</head>

<body>

    @extends("layouts.app")
    @section("title", "accueil")
    @section("content")

    <div class="row align-items-start mb-4">
  <div class="col-md-9">
    <h1>Liste Des Véhicules</h1>
  </div>
  <div class="col-md-3">
    <div id="carouselGarage" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('images/carrousel1.gif') }}" class="d-block w-100" alt="Car 1">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/carrousel2.gif') }}" class="d-block w-100" alt="Car 2">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/jompi.png') }}" class="d-block w-100" alt="Car 3">
        </div>
      </div>
    </div>
  </div>
</div>



    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="card-header">
            <a href="{{ route('vehicules.create') }}" class="btn btn-outline-warning"><i class="fa fa-plus"></i> Ajouter Un vehicule</a><br><br>

<form method="GET" action="/vehicules/search">
            <div class="input-group" style="margin-right:5px;">
                <div class="form-outline" data-mdb-input-init>
                    <input class="form-control" name="search" placeholder="rechercher..." value="{{ request()->input('search') ? request()->input('search') : '' }}">
                </div>
                <button type="submit" class="btn btn-success">rechercher</button>
            </div>
        </form>

            <table class="table table-success table-striped"><br>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Immatriculation</th>
                        <th>Marque</th>
                        <th>Modèle</th>
                        <th>Couleur</th>
                        <th>Année</th>
                        <th>Kilométrage</th>
                        <th>Énergie</th>
                        <th>Boîte</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vehicules as $vehicule)
                    <tr>
                        <td>{{ $vehicule->id }}</td>
                        <td>{{ $vehicule->immatriculation }}</td>
                        <td>{{ $vehicule->marque }}</td>
                        <td>{{ $vehicule->modele }}</td>
                        <td>{{ $vehicule->couleur }}</td>
                        <td>{{ $vehicule->annee }}</td>
                        <td>{{ $vehicule->kilometrage }}</td>
                        <td>{{ $vehicule->energie }}</td>
                        <td>{{ $vehicule->boite }}</td>
                        <td>
                            <a href="{{ route("vehicules.show", $vehicule->id) }}" class="btn btn-outline-warning"><i class="fa fa-eye"></i>Voir</a>
                            <a href="{{ route("vehicules.edit", $vehicule->id) }}" class="btn btn-outline-success"><i class="fa fa-pencil"></i>Modifier</a>
                            <form action="{{ route('vehicules.destroy', $vehicule->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Confirmer la suppression ?')">
                                    <i class="fa fa-trash"></i> Supprimer
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </div>

            </table>
            <div class="d-flex custom-pagination">
                {{ $vehicules->links("pagination::bootstrap-5") }}
        </div>
    </div>
 

    @endsection
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>