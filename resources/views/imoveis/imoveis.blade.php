

@extends('adminlte::page')

@section('meta_tags')
    <link rel="icon" href="/img/seguro_alugel.svg" type="image/svg">
@stop

@section('title', 'Sistema Alugueis - Imóveis')

@section('content_header')
    <h1>Imóveis</h1>

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
            <a class="btn btn-success add-imovel" href="imoveis/add-imovel"><strong>Cadastrar Novo Imóvel</strong></a>
            <hr>
            <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">    
                            <label>Nome:</label>
                            <input id="nome_descricao" name="nome" value="{{ !empty($filter['nome']) ? $filter['nome'] : ''}}" class="form-control" placeholder="informe o nome do imóvel.">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">    
                            <label>Cidade:</label>
                            <input id="cidade_descricao" name="cidade" value="{{ !empty($filter['cidade']) ? $filter['cidade'] : ''}}" class="form-control" placeholder="informe a cidade do imóvel.">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">    
                            <label>Bairro:</label>
                            <input id="bairro_descricao" name="bairro" value="{{ !empty($filter['bairro']) ? $filter['bairro'] : ''}}" class="form-control" placeholder="informe o bairro do imóvel.">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">    
                            <label>Rua:</label>
                            <input id="rua_descricao" name="rua" value="{{ !empty($filter['rua']) ? $filter['rua'] : ''}}" class="form-control" placeholder="informe a rua do imóvel.">
                        </div>
                    </div>

                    <div class="col-md-1">
                        <div class="form-group">    
                            <label>Status</label>
                            <select id="status" name="status" class="form-control" width="200">
                                <option value="">TODOS</option>
                                @foreach ($status_array as $status => $item)
                                       <option value="{{ $status }}" {{(!empty($filter['status']) && $status== $filter['status']) ? 'selected' : ''  }} >{{$item}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>            
            </div>

            <div class="row">
                <div class="col-md-9">
                    <a href="/imoveis" id="filter" class="btn btn-danger"><strong> Limpar Filtro </strong></a>
                    <button form="formFiltro" id="btnFormFiltro" class="btn btn-primary"><strong> Pesquisar</strong> </button>
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
                    <th>Estado</th>
                    <th>Cidade</th>
                    <th>Bairro</th> 
                    <th>Rua</th>                 
                    <th>Valor Mensal</th>
                    <th>Status</th>     
                    <th width="80"></th>
                </tr>
            </thead>
            <tbody id="listar">
                @if(count($list) > 0)
                @foreach ($list as $imovel)
                    <tr>
                        <td>{{ $imovel->nome ? $imovel->nome : '-' }}</td>
                        <td>{{ $imovel->estado }}</td>
                        <td>{{ $imovel->cidade }}</td>
                        <td>{{ $imovel->bairro }}</td>
                        <td>{{ $imovel->rua }}</td>
                        <td>{{ $imovel->valor_mensal }}</td>   
                        <td>
                            <span class="badge rounded-pill badge-{{$imovel->status == 'A' ? 'success' : 'danger'}}">
                                {{ $imovel->getStatusText() }}  
                            </span>
                        </td>

                        <td>
                            <div class="dropdown show">
                                <a class="btn btn-info" href="#" role="button" id="delet" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-list"></i>
                                </a>
                              
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                  <a class="dropdown-item" href="/imoveis/edit-imoveis/{{$imovel->id}}"><i class="fas fa-edit text-yellow"></i> Editar</a>
                                  <a class="dropdown-item" href="#"><i class="fa fa-trash text-red"></i> Deletar</a>
                                </div>
                              </div>      
                          
                        </td>      
                    </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="7"><h5 class="text-center">Nenhum imovel encontrado</h5></td>
                </tr>
            @endif
            </tbody>
        </table>

    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/imoveis.css">
@stop
@section('js')
    <script> 



    </script>
@stop