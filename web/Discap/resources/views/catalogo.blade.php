@extends('app')

@section('titulo', 'Catálogo - Discap Bahia Distribuidora')
@section('catalogo', 'border-bottom: 2px solid #ffffff;')
@section('img')
<img class="home-img" src="{{ asset('img/catalogo.png') }}">
@endsection
@section('conteudo')
<section class="container section col-md-6">
    <div><h2 class="pagina">Catálogo da Discap Bahia</h2></div>
    <div class="row produtos">
        <ul>
            <li class="prod"><a data-toggle="collapse" href="#pont" role="button"
             aria-expanded="false" aria-controls="pont">Ponteiras ▸</a></li>
            <div class="collapse" id="pont">
                <div class="card card-body">
                    <img class="cat" src="{{ asset('img/catalogo/ponteiras.png') }}">
                    <img class="cat" src="{{ asset('img/catalogo/ponteiras2.png') }}">
                    <img class="cat" src="{{ asset('img/catalogo/ponteirasacoinox.png') }}">
                </div>
            </div>
            <li class="prod"><a data-toggle="collapse" href="#coxim" 
            role="button" aria-expanded="false" aria-controls="coxim">Coxins ▸</a></li>
            <div class="collapse" id="coxim">
                <div class="card card-body">
                <img class="cat" src="{{ asset('img/catalogo/coximford.png') }}">
                <img class="cat" src="{{ asset('img/catalogo/coxinsmg.png') }}">
                <img class="cat" src="{{ asset('img/catalogo/coxinswd.png') }}">
                <img class="cat" src="{{ asset('img/catalogo/coxinsimport.png') }}">
                </div>
            </div>
            <li class="prod"><a data-toggle="collapse" href="#junt" 
            role="button" aria-expanded="false" aria-controls="junt">Juntas e Gaxetas ▸</a></li>
            <div class="collapse" id="junt">
                <div class="card card-body">
                <img class="cat" src="{{ asset('img/catalogo/juntasegaxetasgm.png') }}">
                <img class="cat" src="{{ asset('img/catalogo/juntasgaxetasford.png') }}">
                <img class="cat" src="{{ asset('img/catalogo/juntasgaxetasvw.png') }}">
                <img class="cat" src="{{ asset('img/catalogo/juntasgaxetasimport.png') }}">
                <img class="cat" src="{{ asset('img/catalogo/juntasfiat.png') }}">
                <img class="cat" src="{{ asset('img/catalogo/juntaslinhapesada.png') }}">
                </div>
            </div>
            <li class="prod"><a data-toggle="collapse" href="#prot" 
            role="button" aria-expanded="false" aria-controls="prot">Protetores de Cárter ▸</a></li>
            <div class="collapse" id="prot">
                <div class="card card-body">
                <img class="cat" src="{{ asset('img/catalogo/protgmcerto.png') }}">
                <img class="cat" src="{{ asset('img/catalogo/protford.png') }}">
                <img class="cat" src="{{ asset('img/catalogo/protvw2.png') }}">
                <img class="cat" src="{{ asset('img/catalogo/protfiat.png') }}">
                <img class="cat" src="{{ asset('img/catalogo/protimport.png') }}">
                </div>
            </div>
            <li class="prod"><a data-toggle="collapse" href="#flex" 
            role="button" aria-expanded="false" aria-controls="flex">Flexíveis ▸</a></li>
            <div class="collapse" id="flex">
                <div class="card card-body">
                <img class="cat" src="{{ asset('img/catalogo/flexiveisuni.png') }}">
                </div>
            </div>
            <li class="prod"><a data-toggle="collapse" href="#abra" 
            role="button" aria-expanded="false" aria-controls="abra">Abraçadeiras ▸</a></li>
            <div class="collapse" id="abra">
                <div class="card card-body">
                <img class="cat" src="{{ asset('img/catalogo/abraçadeiras.png') }}">
                </div>
            </div>
            <li class="prod"><a data-toggle="collapse" href="#kits" 
            role="button" aria-expanded="false" aria-controls="kits">Kits ▸</a></li>
            <div class="collapse" id="kits">
                <div class="card card-body">
                <img class="cat" src="{{ asset('img/catalogo/kits.png') }}">
                </div>
            </div>
            <li class="prod"><a data-toggle="collapse" href="#acess" 
            role="button" aria-expanded="false" aria-controls="acess">Parafusos, Porcas, Arruelas, Prisioneiros e Químicos ▸</a></li>
            <div class="collapse" id="acess">
                <div class="card card-body">
                <img class="cat" src="{{ asset('img/catalogo/paraporpriqui.png') }}">
                </div>
            </div>
        </ul>
    </div>
    <div><h2 class="pagina">Veja também o catálogo de nossos parceiros!</h2></div>
    <div class="row produtos">
        <ul>
            <li class="prod"><a href="https://pioneiro-pwa.appspot.com/">Catálogo Pioneiro ▸</a></li>
            <li class="prod"><a href="https://www.tuperescapamentos.com.br/produtos/catalogo">Catálogo Tuper ▸</a></li>
        </ul>
    </div>
<section class="col-md-1"></section>
<section class="col-md-5"></section>
@endsection