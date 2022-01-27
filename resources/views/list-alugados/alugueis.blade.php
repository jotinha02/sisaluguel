

@extends('adminlte::page')

@section('meta_tags')
    <link rel="icon" href="/img/seguro_alugel.svg" type="image/svg">
@stop

@section('title', 'Sistema Alugueis - Imóveis')

@section('content_header')
    <h1>Alugueis</h1>
@stop

@section('content')

<div class="panel panel-default">
    <div class="panel-body">
        
        <table class="table table-condensed table-hover table-va-middle" id="tabela">
            <thead>
                <tr>
                    <th width="100">Casa</th>
                    <th width="100">Inquilino</th>    
                    <th width="50">Dia Vencimento</th>
                    <th width="50">Valor Mensal</th>
                    <th width="50">Status</th>
                </tr>
            </thead>
            <tbody id="listar"></tbody>
        </table>

    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/imoveis.css">
@stop
@section('js')
    <script> 

    // abre o modal de cadastrar
     $(".add-imovel").on("click", function(){
        $("#modalAddImovel").modal("show");
    });

    

    </script>
@stop