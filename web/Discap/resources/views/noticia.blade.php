@extends('app')

@section('titulo', 'Notícias - Discap Bahia Distribuidora')
@section('conteudo')
<section class="container section col-md-6">
    <div><h2 class="pagina">{{$new->titulo}}</h2></div>
    <div><h4 class="data azul">Data e hora de publicação: {{$new->created_at}}</h4></div>
    <div><p class="texto cinza parag2">{{$new->conteudo}}</p></div>
</section>
@endsection