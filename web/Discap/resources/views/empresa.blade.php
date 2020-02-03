@extends('app')

@section('titulo', 'Empresa - Discap Bahia Distribuidora')
@section('empresa', 'border-bottom: 2px solid #ffffff;')
@section('img')
<img class="home-img" src="{{ asset('img/empresa.png') }}">
@endsection
@section('conteudo')
<div class="container">
    <section class="row">
        <section class="section col-md-6">
            <div><h2 class="pagina">Nossa história</h2></div>
            <div><h4 class="subtitulo azul pagina">Um pouco mais sobre a Discap Bahia Distribuidora</h4></div>
            <div><p class="texto cinza parag2">Instalada em solo baiano desde 2015, a Discap Bahia vem se destacando em inovação e agilidade, em um mercado altamente competitivo. 
            Ao longo desse tempo, consolidamos parcerias com empresas reconhecidas pela qualidade e confiança, como: <span><a href="http://pioneiroescapamentos.com.br/">Pioneiro Escapamentos</a></span>, <span><a href="https://www.tuperescapamentos.com.br/">Tuper Catalisadores</a></span>,
            <span><a href="https://www.horizonglobalbr.com.br/engate-dhf/">DHF</a></span>, <span><a href="http://www.multengates.com.br/">Mult Engates</a></span>,
            entre outros acessórios disponíveis em nosso site. Seja você também um dos nossos parceiros!<br><br><span style="color: #012755">Boas vendas!</span></p></div>
            <div><h4 class="subtitulo azul pagina">Nossa missão</h4></div>
            <div><p class="texto azul parag2">
        "Constante busca da melhoria no atendimento, que deve estar presente em todas
        as etapas do processo e a valorização de seus colaboradores."</p></div>
        </section>
        <section class="col-md-1"></section>
        <section class="section col-md-5 center">
            <img class="img empresa padd col-md-10" src="{{ asset('img/fotosempresa/foto1.jpg')}}">
            <img class="img empresa padd col-md-10" src="{{ asset('img/fotosempresa/foto2.jpg')}}">
            <img class="img empresa padd col-md-10" src="{{ asset('img/fotosempresa/foto3.jpg')}}">
            <img class="img empresa padd col-md-10" src="{{ asset('img/fotosempresa/foto4.jpg')}}">
        </section>
    </section>
</div>

@endsection