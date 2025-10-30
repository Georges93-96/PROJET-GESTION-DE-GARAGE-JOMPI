<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset( "assets/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion du Garage</title>

<body class="d-flex flex-column min-vh-100">

    <!--  En-tête / Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark position-fixe bg-dark">
        <div class="container">
            <a class="navbar-brand" href=""> Garage JOMPI</a>
            <img src="/images/jompi.png" alt="Bootstrap" width="100" height="50">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route("home") }}">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route("vehicules.index") }}">Véhicules</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route("techniciens.index") }}">Techniciens</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('reparations.index') }} ">Réparations</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route("about") }}">À propos</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <main class="flex-grow-1">
        <div class="container py-4">
            @yield('content')
        </div>
    </main>
    
  <script scr="assets/js/bootstrap.min.js"></script>  
</body>
<footer class="bg-dark text-light text-center py-3 mt-auto">
        <p class="mb-0">&copy; {{ date('Y') }} Garage JOMPI. Tous droits réservés.</p>
    </footer>
</html>