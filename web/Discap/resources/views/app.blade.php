<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titulo')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <link href="{{ asset('css/estilodiscap.css')}}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('img/icon.ico')}}" >

        <!-- Styles -->
        <style>
            html, body {
                background-color: #012755;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container bg-discap">
            <div class="row flex-center">
                <img class="imglogo" src="{{ asset('img/logobranca.png') }}">
                <nav class="navbar navbar-expand-md">
                    <div class="container">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="links nav-item">
                                    <a class="nav-link" href="/">Início</a>
                                </li>
                                <span class="linha"></span>
                                <li class="links nav-item">
                                    <a class="nav-link" style="@yield('empresa')" href="/empresa">Empresa</a>
                                </li>
                                <span class="linha"></span>
                                <li class="links nav-item">
                                    <a class="nav-link" style="@yield('galeria')" href="/galeria">Galeria</a>
                                </li>
                                <span class="linha"></span>
                                <li class="links nav-item">
                                    <a class="nav-link" style="@yield('produtos')" href="/produtos">Produtos</a>
                                </li>
                                <span class="linha"></span>
                                <li class="links nav-item">
                                    <a class="nav-link" style="@yield('catalogo')" href="/catalogo">Catálogo</a>
                                </li>
                                <span class="linha"></span>
                                <li class="links nav-item">
                                    <a class="nav-link" style="@yield('areaatuacao')" href="/areaatuacao">Área de Atuação</a>
                                </li>
                                <span class="linha"></span>
                                <li class="links nav-item">
                                    <a class="nav-link" style="@yield('contato')" href="/contato">Contato</a>
                                </li>
                                <span class="linha"></span>
                                <li class="links nav-item">
                                    <a class="nav-link" style="@yield('adm')" href="/adm">ADM</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="">
            <div>
                @yield('img')
            </div>
        </div>
        <div class="bg-branco">
            @yield('conteudo')
            @yield('content')
        </div>
        <footer class="bg-discap">
            <div class="container col-md-5">
                <div class="row flex-center">
                    <img class="imglogo footer-img" src="{{ asset('img/logobranca.png') }}">
                </div>
                <div class="row flex-center">
                    <p class="footer-texto">Av. Jequié, 184H • Ibirapuera • Vitória da Conquista • BA • CEP 45075-035</p>
                    <p class="footer-texto">(77) 3421 3289 • (77) 3082 3092 • discapbahia@discap10.com</p>
                </div>
            </div>
            <br>
            <div class="flex-center text-light">
                    <p>Copyright © Discap Bahia 2019. Direitos Reservados.</p>
            </div>
        </footer>
    </body>
</html>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
