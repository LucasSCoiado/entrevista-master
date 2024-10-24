<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto">

        <!-- Estilo CSS Bootstrap -->
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Estilo CSS Bootstrap -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body class="antialiased">

        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="" class="navbar-brand">
                        <img src="/img/logo.avif" alt="Controle de viagens">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link"> <ion-icon name="home-outline"></ion-icon>
                            Menu</a>
                        </li>
                        <li class="nav-item">
                            <a href="/veiculo" class="nav-link"> <ion-icon name="car-outline"></ion-icon>
                            Veículos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/motorista" class="nav-link"> <ion-icon name="accessibility-outline"></ion-icon>
                            Motoristas</a>
                        </li>
                        <li class="nav-item">
                            <a href="/viagem" class="nav-link"> <ion-icon name="analytics-outline"></ion-icon>
                            Viagens</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        @yield('content')    

        <footer>
            <p>Viagens &copy; 2024</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
