<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>JOMPI</title>
</head>
<body>
  @extends("layouts.app")
  @section("title", "accueil")
@section('content')
<div class="container">
    <h1>À propos</h1>
    <p class="lead">
        JOMPI est une application web conçue pour faciliter la gestion des garages automobiles.
        Vous pouvez suivre les véhicules, assigner des techniciens et enregistrer toutes les réparations.
    </p>

    <div class="row mt-4">
        <div class="col-md-6">
            <h3>Notre Mission</h3>
            <p>
                Offrir aux garages un outil simple, moderne et efficace pour améliorer leur productivité.
            </p>
        </div>
        <div class="col-md-6">
            <h3>Nos Valeurs</h3>
            <ul>
                <li>Fiabilité et transparence</li>
                <li>Performance et innovation</li>
                <li>Satisfaction du client avant tout</li>
            </ul>
        </div>
    </div>
</div>
@endsection

</body>
</html>