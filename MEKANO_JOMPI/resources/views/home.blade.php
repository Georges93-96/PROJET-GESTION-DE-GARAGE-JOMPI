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
  @section("content")


  <div class="text-center">
    <h1 class="mb-4">Bienvenue sur Garage JOMPI</h1>
    <p class="lead mb-5">Gérez vos véhicules, techniciens et réparations en toute simplicité.</p>



    <section class="banner pt-5">
      <div class="container">
        <div class="row">
          <div class="d-flex justify-content-center gap-3">
            <div class="col-md-4 mb-3">
              <a href="{{ route('vehicules.index') }}" class="btn btn-primary btn-lg w-90 rounded-0">Gérer les Véhicules</a>
            </div>
            <div class="col-md-4 mb-3">
              <a href="{{ route('techniciens.index') }}" class="btn btn-success btn-lg w-95 rounded-0">Gérer les Techniciens</a>
            </div>
            <div class="col-md-4 mb-3">
              <a href="{{ route('reparations.index') }}" class="btn btn-warning btn-lg w-90 text-white rounded-0">Gérer les Réparations</a>
            </div>
          </div>
        </div>
      </div>
  </div>

  </section>
  
  @endsection
</body>

</html>