@extends('app')

@section('titulo', 'Produtos - Discap Bahia Distribuidora')
@section('produtos', 'border-bottom: 2px solid #ffffff;')
@section('img')
<img class="home-img" src="{{ asset('img/produtos.png') }}">
@endsection
@section('conteudo')
<section class="container section col-md-6">
    <div><h2 class="pagina">Nossa empresa trabalha com...</h2></div>
    <div class="row produtos">
        <ul>
            <li class="prod"><a data-toggle="collapse" href="#escap" role="button" aria-expanded="false" aria-controls="escap">Escapamentos ▸</a></li>
            <div class="collapse" id="escap">
                <div class="card card-body">
                    <p class="textoprod">Nós trabalhamos com diversos tipos e marcas de escapamentos.
                    Dê uma olhada em nosso catálogo e veja nossas opções! </p>
                    <img src="{{ asset('img/escapamento.jpg') }}">
                </div>
            </div>
            <li class="prod"><a data-toggle="collapse" href="#catal" role="button" aria-expanded="false" aria-controls="catal">Catalisadores ▸</a></li>
            <div class="collapse" id="catal">
                <div class="card card-body">
                <p class="textoprod">A Discap Bahia trabalha com vários tipos de catalisadores de qualidade.
                    Visite nosso catálogo e veja nossas opções!                </p>
                <img src="{{ asset('img/catalisador.jpg') }}">
                </div>
            </div>
            <li class="prod"><a data-toggle="collapse" href="#engat" role="button" aria-expanded="false" aria-controls="engat">Engates ▸</a></li>
            <div class="collapse" id="engat">
                <div class="card card-body">
                <p class="textoprod">A Discap Bahia também trabalha com engates!
                    Entre em contato conosco para conhecer as peças com as quais trabalhamos.</p>
                <img src="{{ asset('img/engates.jpg') }}">
                </div>
            </div>
            <li class="prod"><a data-toggle="collapse" href="#prot" role="button" aria-expanded="false" aria-controls="prot">Protetor de Cárter ▸</a></li>
            <div class="collapse" id="prot">
                <div class="card card-body">
                <p class="textoprod">A Discap Bahia trabalha com diversas marcas de protetores de Cárter!
                    Visite nosso catálogo e conheça nossos produtos!</p>
                <img src="{{ asset('img/protetores.jpeg') }}">
                </div>
            </div>
            <li class="prod"><a data-toggle="collapse" href="#flex" role="button" aria-expanded="false" aria-controls="flex">Flexíveis ▸</a></li>
            <div class="collapse" id="flex">
                <div class="card card-body">
                <p class="textoprod">Visite nosso catálogo para conhecer nossos tipos de flexíveis.</p>
                <img src="{{ asset('img/flexiveis.jpg') }}">
                </div>
            </div>
            <li class="prod"><a data-toggle="collapse" href="#elev" role="button" aria-expanded="false" aria-controls="elev">Elevadores ▸</a></li>
            <div class="collapse" id="elev">
                <div class="card card-body">
                <p class="textoprod">Entre em contato conosco para connhecer nossos diversos tipos e marcas de elevadores.</p>
                <img src="{{ asset('img/elevadores.jpg') }}">
                </div>
            </div>
            <li class="prod"><a data-toggle="collapse" href="#pont" role="button" aria-expanded="false" aria-controls="pont">Ponteiras ▸</a></li>
            <div class="collapse" id="pont">
                <div class="card card-body">
                <p class="textoprod">A Discap Bahia possui diversos tipos de ponteiras! 
                    Entre em contato conosco para conhecer as marcas com as quais trabalhamos.</p>
                <img src="{{ asset('img/ponteiras.jpg') }}">
                </div>
            </div>
            <li class="prod"><a data-toggle="collapse" href="#acess" role="button" aria-expanded="false" aria-controls="acess">Acessórios em geral ▸</a></li>
            <div class="collapse" id="acess">
                <div class="card card-body">
                <p class="textoprod">A Discap Bahia possui diversos acessórios para você! 
                    Entre em contato conosco para conhecer outras peças com as quais trabalhamos.</p>
                <img src="{{ asset('img/acess.png') }}">
                </div>
            </div>
        </ul>
    </div>
<section class="col-md-1"></section>
<section class="col-md-5"></section>
@endsection