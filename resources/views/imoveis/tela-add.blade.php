@extends('adminlte::page')

@section('title', 'Sistema Alugueis - Dashboard')

@section('meta_tags')
    <link rel="icon" href="/img/seguro_alugel.svg" type="image/svg">
@stop

@section('content_header')
    <h1>Cadastrar Novo Imóvel</h1>
@stop

@section('content')

<div class="panel panel-default">
    <div class="panel-heading"></div>
    <div class="panel-body">
        <a href="/imoveis" class="btn btn-danger">Voltar</a>
        <hr class="sep-dot">

        <form action="/imoveis/add-imovel" method="POST" id="formAdicionar">

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <select name="estado"  id="estado" class="form-control ls-select">
                        <option value="">Selecione o estado</option>
                        @foreach ($estados_array as $estado)
                            <option value="{{$estado}}" {{ $estado == old('estado') ? 'selected' : '' }}>{{$estado}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" required name="cidade" id="cidade" placeholder="Informe a cidade do imóvel."/>
            </div>

            <div class="col-md-4">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" required name="bairro" id="bairro" placeholder="Informe o bairro do imóvel."/>
            </div>
        </div>
    <hr>
        <div class="row">
            <div class="col-md-4">
                <label for="rua">Rua:</label>
                <input type="text" class="form-control" required name="rua" id="rua" placeholder="Informe a rua do imóvel."/>
            </div>

            <div class="col-md-4">
                <label for="numero">Número:</label>
                <input type="text" class="form-control" required name="numero" id="numero" placeholder="Informe o número do imóvel."/>
            </div>

            <div class="col-md-4">
                <label for="referencia">Referẽncia:</label>
                <input type="text" class="form-control" required name="referencia" id="referencia" placeholder="Site um ponto referência."/>
            </div>

        </div>
    <hr> 
        <div class="row">
            <div class="col-md-4">
                <label for="valor_mensal">Valor Mensal:</label>
                <input type="text" class="form-control money" required name="valor_mensal" id="valor_mensal" placeholder="0,00"/>
            </div> 

            <div class="col-md-4">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" required name="nome" id="nome" placeholder="Ex: Apartamento 202. Casa Amarela 1º andar. Casa Amarela 2º andar."/>
            </div> 

            <div class="col-md-4">
                <label for="dia_vencimento">Dia Do Vencimento:</label>
                <input type="text" class="form-control" required name="dia_vencimento" id="dia_vencimento" placeholder="12/12."/>
            </div>
        </div>
    <hr>
        <div class="modal-footer">
            <button form="formAdicionar" style="margin-top: auto;" class="btn btn-success" >Cadastrar</button>
        </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop