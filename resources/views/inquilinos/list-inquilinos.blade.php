<style>
</style>
@extends('adminlte::page')

@section('meta_tags')
    <link rel="icon" href="/img/seguro_alugel.svg" type="image/svg">
@stop

@section('title', 'Sistema Alugueis - Inquilinos')

@section('content_header')
    <h1>Inquilinos</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">    
        <form id="formFiltro">
            <a class="btn btn-success add-inquilino" href="#">Cadastrar Novo Inquilino</a>
            <hr>
            <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">    
                            <label>Nome</label>
                            <input id="descricao" class="form-control" placeholder="informe o nome do inquilino.">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">    
                            <label>CPF</label>
                            <input id="cpf_descricao" class="form-control" placeholder="informe o cpf do inquilino.">
                        </div>
                    </div>
            </div>

                <div class="row">
                    <div class="col-md-9">
                        <button form="formFiltro" id="btnFormFiltro" class="btn btn-primary">Pesquisar</button>
                    </div>
                </div>
        </form>
    </div>
</div>

  <!-- add inquilino -->
    <div class="modal fade" id="modalAddInquilino" role="dialog">
        <div class="modal-dialog modal-lg">

        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cadastrar Novo Inquilino</h4>
                <button type="button" class="close fechar-modal" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                   
                        <form id="formAddInquilino">
                            <div class="col-sm-12">   
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">    
                                            <label>Nome:</label>
                                            <input type="text" class='form-control' required name="add-nome" id="add-nome" placeholder="Informe o nome do inquilino">
                                        </div>
                                    </div>                                      

                                    <div class="col-md-6">
                                        <div class="form-group">    
                                            <label>CPF:</label>
                                            <input type="text" class='form-control cpf' required name="add-cpf" id="add-cpf" placeholder="Informe o CPF do inquilino">
                                        </div>
                                    </div>
                                </div>                                                             
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">   
                                            <label>Telefone:</label>
                                            <input type="text" class='form-control phone' required name="add-telefone" id="add-telefone" placeholder="Informe o telefone do inquilino">
                                        </div>
                                    </div>

                                     <div class="col-md-6">
                                        <div class="form-group">    
                                            <label>Email:</label>
                                            <input type="text" class='form-control' name="add-email" id="add-email" placeholder="Informe o email do inquilino">
                                        </div>
                                    </div>
                                </div>                           
                                </div>
                           
                        </form>
                    </div>    
                    <div class="modal-footer">
                        <button form="formAddInquilino"  style="margin-top: 5px;" class="btn btn-primary">Cadastrar</button> 
                    </div>                   
                </div>  
            </div>
        </div>    
    </div> 

    <div class="panel panel-default">
            <table class="table table-condensed table-hover table-va-middle" id="tabela">
                <thead>
                    <tr>
                        <th width="200">Nome</th>   
                        <th width="200">CPF</th>
                        <th width="150">Telefone</th>
                        <th width="150">Email</th>
                    </tr>
                </thead>
                <tbody id="listar"></tbody>
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