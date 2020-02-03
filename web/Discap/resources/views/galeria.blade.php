@extends('app')

@section('titulo', 'Galeria - Discap Bahia Distribuidora')
@section('galeria', 'border-bottom: 2px solid #ffffff;')
@section('conteudo')

<div class="container">
<div class="row center"><h2 class="pagina form">Galeria de fotos</h2></div>
    <section class="row">
        <section class="section col-md-4 center">
            <img class="img empresa padd col-md-10" src="{{ asset('img/fotosempresa/foto1.jpg')}}">
            <img class="img empresa padd col-md-10" src="{{ asset('img/fotosempresa/foto2.jpg')}}">
            <img class="img empresa padd col-md-10" src="{{ asset('img/fotosempresa/foto3.jpg')}}">
        </section>
        <section class="section col-md-4 center">
            <img class="img empresa padd col-md-10" src="{{ asset('img/fotosempresa/foto4.jpg')}}">
            <img class="img empresa padd col-md-10" src="{{ asset('img/fotosempresa/foto5.jpg')}}">
            <img class="img empresa padd col-md-10" src="{{ asset('img/fotosempresa/foto6.jpg')}}">
        </section>
        <section class="section col-md-4 center">
            <img class="img empresa padd col-md-10" src="{{ asset('img/fotosempresa/foto7.jpg')}}">
        </section>
    </section>
</div>

@endsection