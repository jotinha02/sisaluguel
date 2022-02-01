<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquilino;

class InquilinosController extends Controller
{
// list{

    public function ListInquilino(Request $request) {
       
        $inquilino = new Inquilino;
        $nome = $request->get('nome');
        $cpf = $request->get('cpf');

        $list = $inquilino;

        if( !empty($nome) ){
            $list = $inquilino->whereRaw("nome like '%$nome%'");
        }

        if( !empty($cpf) ){
            $list = $inquilino->where('cpf', $cpf);
        }

        return view('inquilinos.list-inquilinos', [
            'list' => $list->get(),
            'filter' => $request->all(),

        ]);

    }
// }

// add{
    public function TelaCadastro() {
            
        return view('inquilinos.inquilinos-add');
    }

    public function CriarInquilino (Request $request) {

        $inquilino = new Inquilino;

        $validData = $request->validate([
            'nome' => 'required|string',
            'cpf' => 'required|string',
            'telefone' => 'required|string',
            'email' => 'nullable|string',
        ]);

        $inquilino->create($validData);
       
        return redirect('/inquilinos');     
    }

// }
    
// edit{

    public function TelaEditar($id) {
        $inquilino = Inquilino::findOrFail($id);
        
        return view('inquilinos.inquilinos-edit',[
            'inquilino' => $inquilino
        ]);
    }

    public function EditarInquilino(Request $request) {
        Inquilino:: findOrFail($request->id)->update($request->all());

        return redirect('/inquilinos/edit-inquilino/'.$request->id)->with('msg', 'Inquilino editado!');
    } 

// }

}
