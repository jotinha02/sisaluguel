@extends('adminlte::page')

@section('title', 'Sistema Alugueis - Editar Imóvel')

@section('meta_tags')
    <link rel="icon" href="/img/seguro_alugel.svg" type="image/svg">
@stop

@section('content_header')
    <h1>Editar imóvel</h1>
@stop

@section('content')

<div class="panel panel-default">
    <div class="panel-heading"></div>
    <div class="panel-body">
        <a href="/imoveis" class="btn btn-danger">Voltar</a>
        <hr class="sep-dot">
    <form action="/imoveis/edit/{{ $imovel->id }}" method="POST">
    @csrf
        @method('POST')
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado" class="form-control ls-select">
                        <option value="{{ $imovel->estado }}">Selecione o estado</option>
                        @foreach ($estados_array as $estado)
                            <option value="{{$estado}}" {{ $estado == old('estado') || $estado == $imovel->estado ? 'selected' : '' }}>{{$estado}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" required name="cidade" id="cidade" value="{{ $imovel->cidade }}"/>
            </div> 

            <div class="col-md-4">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" required name="bairro" id="bairro" value="{{ $imovel->bairro }}"/>
            </div>
        </div>
    <hr>
        <div class="row">
            <div class="col-md-4">
                <label for="rua">Rua:</label>
                <input type="text" class="form-control" required name="rua" id="rua" value="{{ $imovel->rua }}"/>
            </div>

            <div class="col-md-4">
                <label for="numero">Número:</label>
                <input type="text" class="form-control" required name="numero" id="numero" value="{{ $imovel->numero }}"/>
            </div>

            <div class="col-md-4">
                <label for="referencia">Referẽncia:</label>
                <input type="text" class="form-control" required name="referencia" id="referencia" value="{{ $imovel->referencia }}"/>
            </div>

        </div>
    <hr>
        <div class="row">
            <div class="col-md-4">
                <label for="valor_mensal">Valor Mensal:</label>
                <input type="text" class="form-control" required name="valor_mensal" id="valor_mensal" value="{{ $imovel->valor_mensal }}"/>
            </div> 

            <div class="col-md-4">
                <label for="dia_vencimento">Dia do Vencimento:</label>
                <input type="text" class="form-control" required name="dia_vencimento" id="dia_vencimento" value="{{ $imovel->dia_vencimento }}"/>
            </div>
            
            
            <div class="col-md-4">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" required name="nome" id="nome" value="{{ $imovel->nome }}"/>
            </div> 
        </div>
        <hr>
        <div class="modal-footer">
            <input type="submit" style="margin-top: auto;" class="btn btn-success" value="Editar Imovel"></button>
        </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop