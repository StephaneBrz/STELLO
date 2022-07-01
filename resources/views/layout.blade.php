<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/03d157450a.js" crossorigin="anonymous"></script>
    
    <title>@yield('titre')</title>
</head>
<body>
    <header class="container mb-5">
        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('projects.index')}}">STELLO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('projects.index')}}">MES PROJETS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('users.index')}}">MON PROFIL</a>
            </li>

            @auth
            @endauth
          </ul>
    </header>

    <section>
        @yield('contenu')
    </section>

   
</body>
</html>