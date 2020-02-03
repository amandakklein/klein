@extends('app')
@section('titulo', 'Editar Notícia - Discap Bahia Distribuidora')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 form">
            <form method="POST" id="forms" action="{{route('new.update', $new->id)}}">
                @csrf
                @method('PUT')
                <div class="row form-group">
                    <label class="col-3" for="titulo">Título:</label>
                    <input type="text" id="titulo" name="titulo" class="form-control col-9" value="{{$new->titulo}}" required>
                </div>
                <div class="row form-group">
                    <label class="col-3" for="conteudo">Conteúdo:</label>
                    <textarea name="conteudo" id="conteudo" class="form-control col-9" required>{{$new->conteudo}}</textarea>
                </div>
                <div class="row form-group">
                    <button type="submit" class="btn btn-success offset-3">
                        <i class="fa fa-save"></i> Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection