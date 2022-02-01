@extends('adminlte::page')

@section('title', 'Sistema Alugueis - Editar Inquilino')

@section('meta_tags')
    <link rel="icon" href="/img/seguro_alugel.svg" type="image/svg">
@stop

@section('content_header')
    <h1>Editar Inquilino</h1>
@stop

@section('content')

<div class="panel panel-default">
    <div class="panel-heading"></div>
    <div class="panel-body">
        <a href="/inquilinos" class="btn btn-danger">Voltar</a>
        <hr class="sep-dot">
        <form action="/inquilinos/edit/{{ $inquilino->id }}" method="POST">
            @csrf
            @method('POST')

        <div class="row">

            <div class="col-md-4">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" required name="nome" id="nome" value="{{ $inquilino->nome }}"/>
            </div>

            <div class="col-md-4">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control cpf" required name="cpf" id="cpf" value="{{ $inquilino->cpf }}"/>
            </div>

            <div class="col-md-4">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control phone" required name="telefone" id="telefone" value="{{ $inquilino->telefone }}"/>
            </div>
        </div>
    <hr>
      
        <div class="row">
            <div class="col-md-4">
                <label for="email">Email:</label>
                <input type="text" class="form-control"  name="email" id="email" value="{{ $inquilino->email }}"/>
            </div>
        </div>
    <hr>    
    </div>
        <div class="modal-footer">
            <input type="submit" style="margin-top: auto;" class="btn btn-success" value="Editar Inquilino"></button>
        </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop