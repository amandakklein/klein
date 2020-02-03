<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Discap Bahia Distribuidora</title>

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
    <div class="azulescuro"><div class="contador"><p style="margin:0 30px; padding-top:3px">Contato: (77) 3421 3289 • (77) 3082 3092</p> <p align=right style="margin: -25px 5px 0 0" >Visitas: <a href="https://www.webcontadores.com" title="contador de visitas"><img src="https://counter2.wheredoyoucomefrom.ovh/private/webcontadores.php?c=l4pzhd9fu8t3faz67ue255npppegnt75" border="0" title="contador de visitas" alt="contador de visitas"></a></p></div></div>
        <div class="container bg-discap">
            <div class="row flex-center">
                <img class="imglogo" src="{{ asset('img/logobranca.png') }}">
                <nav class="navbar navbar-expand-md">
                    <div class="container">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="links nav-item">
                                    <a class="nav-link" style="border-bottom: 2px solid #ffffff;" href="/">Início</a>
                                </li>
                                <span class="linha"></span>
                                <li class="links nav-item">
                                    <a class="nav-link" href="/empresa">Empresa</a>
                                </li>
                                <span class="linha"></span>
                                <li class="links nav-item">
                                    <a class="nav-link" href="/galeria">Galeria</a>
                                </li>
                                <span class="linha"></span>
                                <li class="links nav-item">
                                    <a class="nav-link" href="/produtos">Produtos</a>
                                </li>
                                <span class="linha"></span>
                                <li class="links nav-item">
                                    <a class="nav-link" href="/catalogo">Catálogo</a>
                                </li>
                                <span class="linha"></span>
                                <li class="links nav-item">
                                    <a class="nav-link" href="/areaatuacao">Área de Atuação</a>
                                </li>
                                <span class="linha"></span>
                                <li class="links nav-item">
                                    <a class="nav-link" href="/contato">Contato</a>
                                </li>
                                <span class="linha"></span>
                                <li class="links nav-item">
                                    <a class="nav-link" href="/adm">ADM</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="">
            <div>
                <img class="home-img" src="{{ asset('img/inicionovinho.gif') }}">
            </div>
        </div>
        <section class="container center sess bg-branco">
            <div>
                <h2 class="titulo bg-branco center">News</h2>
                <div class="linha-a"></div>
                <div class="row center">
                    @foreach($news as $new)
                    <div class='news center col-md-2'>
                        <div><a href="{{route('new.show', $new->id)}}"><h2 class="newstitulo">{{$new->titulo}}</h2></a></div>
                        <div><p class="data wel center texto branco parag2">{{$new->created_at}}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="container sess bg-azul">
            <div class='center'>
                <h2 itemprop="headline" class="titulo center">Empresa</h2>
                <div class="linha-b"></div>
            </div>
            <div class="row center">
                <div class='row col-md-4'>
                    <h3 class="subtitulo bg-azul">"Nossa missão é...</h3>
                    <h5 class="texto branco parag">a constante busca da melhoria no atendimento,
                        que deve estar presente em todas as etapas 
                        do processo e a valorização de seus colaboradores."</h5>
                </div>
                <div class="col-md-1"></div>
                <div class="row col-md-5 center"> 
                    <img class="home-img" src="{{ asset('img/fotosempresa/foto4.jpg')}}"> 
                </div>
            </div>
        </section>
        <section class="container sess bg-branco">
            <div>
                <h2 class="titulo bg-branco center">Produtos</h2>
                <div class="linha-a"></div>
                <div class="row center">
                    <ul align=left class="produtos padd col-md-4">
                        <li>A Discap Bahia oferece uma grande variedade de Escapamentos, Catalisadores, Flexíveis, Ponteiras...</li>
                        <li><a class="btn" style="border: 1px solid #012755; margin: 15px 0;" href="/produtos">e mais...</a></li>
                    </ul>
                    <img class="img padd col-md-5" src="{{ asset('img/acess.png')}}"></div>
                </div>
        </section>
        <section class="container sess bg-azul">
            <div class=''>
                <h2 class="titulo">Parceiros</h2>
                <div class="linha-b"></div>
            </div>
            <div class="row center">
                <div class='row col-md-10 flex-center'>
                    <a class="col-md-3 parceiros" href="http://pioneiroescapamentos.com.br/"><img class="parceiros" src="{{ asset('img/pioneiro.png') }}"></a>
                    <div class="col-md-1"></div>
                    <a class="col-md-3 parceiros" href="https://www.tuperescapamentos.com.br/"><img class="parceiros" src="{{ asset('img/tuper.png') }}"></a>
                    <div class="col-md-1"></div>
                    <a class="col-md-3 parceiros" href="http://www.multengates.com.br/"><img class="parceiros" src="{{ asset('img/mult.png') }}"></a>
                </div>
            </div>
        </section>
        <section class="container sess bg-branco">
            <div class=''>
                <h2 class="titulo bg-branco">Área de Atuação</h2>
                <div class="linha-a"></div>
                <div class="row center">
                    <img class="img padd col-md-4" src="{{ asset('img/mapa2.png')}}">
                    <ul align=left class="produtos padd col-md-4">
                        <li>A Discap Bahia atende com confiança regiões por todo o estado da Bahia e norte de Minas Gerais...</li>
                        <li><a class="btn" style="border: 1px solid #012755; margin: 15px 0;" href="/areaatuacao">Veja as cidades!</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <footer class="bg-discap">
            <div class="container footer col-md-5">
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
