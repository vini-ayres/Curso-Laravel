<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img src="/img/conference.ico" alt="HDC Events" class="d-inline-block align-top">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Eventos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/events/create">Criar Eventos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/">Entrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/">Cadastrar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <img src="/img/banner1.jpg" alt="Banner 1" id="banner-1">
        </header>
        @yield('content')
        <footer>
            <p>HDC Events &copy; 2023</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
