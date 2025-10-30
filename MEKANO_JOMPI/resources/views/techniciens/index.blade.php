<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset( "assets/css/bootstrap.min.css") }}">
    <title>Liste des techniciens</title>
</head>

<body>

    @extends("layouts.app")
    @section("title", "accueil")
    @section("content")

    <div>
        <h1>Liste Des Techniciens</h1>
    </div>
    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="card-header">
            <a href="{{ route('techniciens.create') }}" class="btn btn-warning btn-sm"><i class="fa fa-plus"></i> Ajouter Un Techniciens</a><br><br>

            <form method="GET" action="/techniciens/search">
                <div class="input-group" style="margin-right:5px;">
                    <div class="form-outline" data-mdb-input-init>
                        <input class="form-control" name="search" placeholder="rechercher..." value="{{ request()->input('search') ? request()->input('search') : '' }}">
                    </div>
                    <button type="submit" class="btn btn-success">rechercher</button>
                </div>
            </form>

            <table class="table table-hover table table-success "><br>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Spécialité</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($techniciens as $technicien)
                    <tr>
                        <td>{{ $technicien->id }}</td>
                        <td>{{ $technicien->nom }}</td>
                        <td>{{ $technicien->prenom }}</td>
                        <td>{{ $technicien->specialite }}</td>
                        
                        <td>
                            <a href="{{ route("techniciens.show", $technicien->id) }}" class="btn btn-outline-warning"><i class="fa fa-eye"></i>Voir</a>
                            <a href="{{ route("techniciens.edit", $technicien->id) }}" class="btn btn-outline-success"><i class="fa fa-pencil"></i>Modifier</a>
                            <form action="{{ route('techniciens.destroy', $technicien->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Confirmer la suppression ?')">
                                    <i class="fa fa-trash"></i> Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex custom-pagination">
                {{ $techniciens->links("pagination::bootstrap-5") }}
            </div>
        </div>
    </div>
    @endsection
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>