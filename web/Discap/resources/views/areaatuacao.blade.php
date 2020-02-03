@extends('app')

@section('titulo', 'Área de Atuação - Discap Bahia Distribuidora')
@section('areaatuacao', 'border-bottom: 2px solid #ffffff;')
@section('img')
<img class="home-img" src="{{ asset('img/areaatuacao.png') }}">
@endsection
@section('conteudo')
<div class="container">
    <div class="row section">
        <section class="col-md-7">
            <img src="{{ asset('img/mapa.png') }}">
        </section>
        <section class="col-md-5">
            <div><h2 class="pagina">Onde Atuamos?</h2></div>
            <div><p class="login texto cinza parag2">A Discap Bahia atende em todas as <span style="color: #012755">regiões da Bahia</span>, sempre com confiança e qualidade em todo processo.
                Além do solo baiano, nós atendemos as regiões do <span style="color: #012755">norte de Minas Gerais</span>. Entre em contato conosco e boas vendas!</p></div>
            <ul class="produtos aa">
                <li>Vitória da Conquista e Região;</li>
                <li>Salvador;</li>
                <li>Feira de Santana;</li>
                <li>Barreiras;</li>
                <li>Juazeiro;</li>
                <li>Guanambi;</li>
                <li>Eunápolis;</li>
                <li>E muitas outras...</li>
            </ul>
            </section>
    </div>
</div>
@endsection