

@extends('adminlte::page')

@section('meta_tags')
    <link rel="icon" href="/img/seguro_alugel.svg" type="image/svg">
@stop

@section('title', 'Sistema Alugueis - Imóveis')

@section('content_header')
    <h1>Imóveis</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">    
        <form id="formFiltro">
            <a class="btn btn-success add-imovel" href="#">Cadastrar Novo Imóvel</a>
            <hr>
            <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">    
                            <label>Nome:</label>
                            <input id="nome_descricao" class="form-control" placeholder="informe o nome do imóvel.">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">    
                            <label>Cidade:</label>
                            <input id="cidade_descricao" class="form-control" placeholder="informe a cidade do imóvel.">
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
 <div class="modal fade" id="modalAddImovel" role="dialog">
    <div class="modal-dialog modal-lg">

    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cadastrar Novo Imóvel</h4>
            <button type="button" class="close fechar-modal" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
               
                    <form id="formAddImovel">
                        <div class="col-sm-12">   
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">    
                                        <label>Nome:</label>
                                        <input type="text" class='form-control' required name="add-nome" id="add-nome" placeholder="Informe o nome do inquilino.">
                                    </div>
                                </div>                                      

                                <div class="col-md-6">
                                    <div class="form-group">    
                                        <label>Rua:</label>
                                        <input type="text" class='form-control' required name="add-rua" id="add-rua" placeholder="Informe a rua do inóvel.">
                                    </div>
                                </div>
                            </div>                                                             
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">   
                                        <label>Número:</label>
                                        <input type="text" class='form-control' required name="add-numero" id="add-numero" placeholder="Informe o numero do imóvel.">
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                    <div class="form-group">    
                                        <label>Bairro:</label>
                                        <input type="text" class='form-control' name="add-bairro" id="add-bairro" placeholder="Informe o bairro.">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">    
                                        <label>Cidade:</label>
                                        <input type="text" class='form-control' name="add-cidade" id="add-cidade" placeholder="Informe a cidade.">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">    
                                        <label>Estado:</label>
                                        <input type="text" class='form-control' name="add-estado" id="add-estado" placeholder="Informe o estado">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">    
                                        <label>Valor Mensal:</label>
                                        <input type="text" class='form-control money' id="fldValor" name="add-email" id="add-email" placeholder="Informe o valor mensal do imóvel">
                                    </div>
                                </div>
                            </div>                           
                            </div>                       
                    </form>
                </div>    
                <div class="modal-footer">
                    <button form="formAddImovel"  style="margin-top: 5px;" class="btn btn-primary">Cadastrar</button> 
                </div>                   
            </div>  
        </div>
    </div>    
</div> 


<div class="panel panel-default">
    <div class="panel-body">
        
        <table class="table table-condensed table-hover table-va-middle" id="tabela">
            <thead>
                <tr>
                    <th width="250">Nome</th>
                    <th width="250">Rua</th>                 
                    <th width="200">Bairro</th> 
                    <th width="200">Cidade</th>
                    <th width="250">Estado</th>
                    <th width="200">Valor Mensal</th>
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

    // $("#fldValor").maskMoney({thousands:".", decimal:",", symbol:"R$", showSymbol:true, symbolStay:true});

    </script>
@stop