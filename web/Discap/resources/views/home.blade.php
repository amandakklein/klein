@extends('app')
@section('titulo', 'ADM - Discap Bahia Distribuidora')
@section('content')
<div class="container">
    <div class="row justify-content-center form">
        <div class="col-md-6 form">
            <div class="card">
                <div class="card-header">Adicionar uma notícia</div>

                    <section class="col-md-8 container form">
                        <form method="POST" action="/news">
                            @method('POST')
                            @csrf
                            <div class="row form-group">
                                <label for="nome">Título da notícia:</label>
                                <input class="form-control" id="titulo" name="titulo" value="{{old('titulo')}}" type="text">
                            </div>
                            <div class="row form-group">
                                <label for="conteudo">Conteúdo:</label>
                                <textarea class="form-control" id="conteudo" name="conteudo" value="{{old('conteudo')}}"></textarea>
                            </div>
                            <div class="row form-group">
                                <button type="submit" style="border: 1px solid #012755" class="btn">Adicionar</button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
            <div class="col-md-6 form">
                <table class="table table-bordered">
                    <thead>
                        <th>Título</th>
                        <th>Data de Criação</th>
                        <th>Editar</th>
                       <th>Excluir</th>
                    </thead>
                    <tbody>
                        @foreach($news as $new)
                        <tr>
                            <td>{{ $new->titulo }}</td>
                            <td>{{ $new->created_at }}</td>
                            <td><a class="btn btn-primary" href="{{ route('new.edit', $new->id)}}"><i class="fa fa-pencil"></i></a></td>
                            <td><form action="{{ route('new.destroy', $new->id)}}" method="post"
                                onSubmit="if(!confirm('Tem certeza?')){ return false;}" class="d-inline">
                                @csrf 
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
