<style>
</style>
@extends('adminlte::page')

@section('meta_tags')
    <link rel="icon" href="/img/seguro_alugel.svg" type="image/svg">
@stop

@section('title', 'Sistema Alugueis - Inquilinos')

@section('content_header')
    <h1>Inquilinos</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@stop

@section('content')

<div class="card">
    <div class="card-header">    
        <form id="formFiltro">
            <a class="btn btn-success add-inquilino" href="/inquilinos/add-inquilino">Cadastrar Novo Inquilino</a>
            <hr>
            <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">    
                            <label>Nome</label>
                            <input id="descricao" name='nome' class="form-control" value="{{ !empty($filter['nome']) ? $filter['nome'] : ''}}" placeholder="informe o nome do inquilino.">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">    
                            <label>CPF</label>
                            <input id="cpf_descricao" name='cpf' class="form-control cpf" value="{{ !empty($filter['cpf']) ? $filter['cpf'] : ''}}" placeholder="informe o cpf do inquilino.">
                        </div>
                    </div>
            </div>

                <div class="row">
                    <div class="col-md-9">
                        <a href="/inquilinos/list-inquilinos" id="filter" class="btn btn-danger">Limpar Filtro</a>
                        <button id="btnFormFiltro" class="btn btn-primary">Pesquisar</button>
                    </div>
                </div>
        </form>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-body">
    <table class="table table-condensed table-hover table-va-middle" id="tabela">
            <thead>
                <tr>
                    <th>Nome</th>   
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Email</th>     
                    <th width="50"></th>
                </tr>
            </thead>
            <tbody id="listar">
                @if(count($list) > 0)
                    @foreach ($list as $inquilino)
                        <tr>
                            <td>{{ $inquilino->nome ? $inquilino->nome : '-' }}</td>
                            <td>{{ $inquilino->cpf }}</td>
                            <td>{{ $inquilino->telefone }}</td>
                            <td>{{ $inquilino->email }}</td>
                            <td>
                                <div class="dropdown show">
                                    <a class="btn btn-info" href="#" role="button" id="delet" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-list"></i>
                                    </a>
                                  
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                      <a class="dropdown-item" href="/inquilinos/edit-inquilino/{{$inquilino->id}}"><i class="fas fa-edit text-yellow"></i> Editar</a>
                                      <a class="dropdown-item" href="#"><i class="fa fa-trash text-red"></i> Deletar</a>
                                    </div>
                                  </div> 
                            </td>
                        </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="5"><h5 class="text-center">Nenhum inquilino encontrado</h5></td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>    

@stop

@section('css')
    <link rel="stylesheet" href="/css/list-inquilino.css">
@stop

@section('js')
    <script> 

     $(".add-inquilino").on("click", function(){
        $("#modalAddInquilino").modal("show");
    });

    </script>
@stop