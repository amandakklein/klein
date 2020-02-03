@extends('app')

@section('titulo', 'Contato - Discap Bahia Distribuidora')
@section('contato', 'border-bottom: 2px solid #ffffff;')
@section('img')
<img class="home-img" src="{{ asset('img/contato.png') }}">
@endsection
@section('conteudo')
<div class="container">
    <div class="row">
        <section class="container section col-md-4">
            <div><h2 class="pagina">Visite-nos ou fale conosco</h2></div>
            <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.5782156195573!2d-40.85254668570706!3d-14.848911804364132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7463bbbabfd3815%3A0x4af81cdfd41a3ceb!2sDISCAP%20BAHIA!5e0!3m2!1spt-BR!2sbr!4v1579561690551!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
        </section>
        <section class="col-md-1"></section>
        <section class="col-md-6 section">
            <form method="POST" action="/enviar" name="form_contato">
                @method('POST')
                @csrf
                <div class="row form-group">
                    <label for="nome">Nome completo:</label>
                    <input class="form-control" id="nome" name="nome" value="{{old('nome')}}" type="text">
                </div>
                <div class="row form-group">
                    <label for="nome">Telefone:</label>
                    <input class="form-control" id="tel" name="tel" value="{{old('tel')}}" type="text">
                </div>
                <div class="row form-group">
                    <label for="nome">E-mail:</label>
                    <input class="form-control" id="email" name="email" value="{{old('email')}}" type="email">
                </div>
                <div class="row form-group">
                    <label for="nome">Mensagem:</label>
                    <textarea class="form-control" id="msg" name="msg" value="{{old('msg')}}"></textarea>
                </div>
                <div class="row form-group">
                    <button type="submit" style="border: 1px solid #012755" class="btn">Enviar</button>
                </div>
            </form>
        </section>
    </div>
</div>
@endsection