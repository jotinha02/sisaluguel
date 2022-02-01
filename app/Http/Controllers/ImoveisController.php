<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;

class ImoveisController extends Controller
{
// list {

    // função para listar imoveis
    public function ListarImovel(Request $request) {
      
        $imovel = new Imovel;
        
        $nome = $request->get('nome');
        $cidade = $request->get('cidade');
        $bairro = $request->get('bairro');
        $rua = $request->get('rua');
        $status = $request->get('status');

        $status_array = [
            'A' => 'Disponiveis',
            'I' => 'Alugadas',
            'N' => 'Inativas'
        ];
        
        $list = $imovel;

        // filtros para buscar pela tela
        if( !empty($nome) ){
            $list = $imovel->whereRaw("nome like '%$nome%'");
        }

        if( !empty($cidade) ){
            $list = $imovel->whereRaw("cidade like '%$cidade%'");
        }

        if( !empty($bairro) ){
            $list = $imovel->whereRaw("bairro like '%$bairro%'");
        }

        if( !empty($rua) ){
            $list = $imovel->whereRaw("rua like '%$rua%'");
        }

        if( !empty($status) ){
            $list = $imovel->where('status', $status);
        }

        return view('imoveis.imoveis',[
            'list' => $list->get(),
            'filter' => $request->all(),
            'status_array' => $status_array,
        ]);
    }

// }

    // Inativa o imovel
    public function Inativar($id){

        Imovel::findOrFail($id)->delete();
                    
       return redirect("imoveis")->with('msg', "Imóvel excluido!");
    }

// editar {
    // exibe a tela de editar imovel
    public function TelaEditar($id)
    {
        $imovel = Imovel::findOrFail($id);

        $estados_array = ['AC', 'AL', 'AP', 'AM', 'BA', 'DF','CE','ES','RR','GO','MA','MT','MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'TO', 'SC', 'SP', 'SE'];
        
        return view('imoveis.edit-imoveis',[
            'imovel' => $imovel,
            'estados_array' => $estados_array
        ]);
    }

    // update dos dados do imovel
    public function EditarImovel(Request $request) {
        Imovel:: findOrFail($request->id)->update($request->all());

        return redirect('/imoveis/edit-imoveis/'.$request->id)->with(['msg' => 'Imóvel editado!']);
    } 
// }

// add {
     // exibe a tela de cadastrar 
    public function TelaCadastro() {
        $estados_array = ['AC', 'AL', 'AP', 'AM', 'BA', 'DF','CE','ES','RR','GO','MA','MT','MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'TO', 'SC', 'SP', 'SE'];

        return view('imoveis.tela-add',[
            'estados_array' => $estados_array
        ]);
    }

     // validações ao adicionar novo imovel
     public function CriarImovel(Request $request) {
        $imovel = new Imovel;

        $validData = $request->validate([
            'nome' => 'required|string',
            'cidade' => 'required|string',
            'estado' => 'required|string',
            'rua' => 'required|string',
            'bairro' => 'required|string',
            'numero' => 'required|string',
            'dia_vencimento' => 'required|string',
            'referencia' => 'nullable|string',
            'valor_mensal' => 'required|string'
        ]);
        $validData['status'] = 'A';
        $validData['valor_mensal'] = $this->unmaskMoney($validData['valor_mensal']);

        $imovel->create($validData);

        return redirect('imoveis');       
    }
//  }
     
   

}
