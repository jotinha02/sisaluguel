<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlugueisController extends Controller
{
    public function list_alugueis() {
      
        return view('list-alugados.alugueis');
    }

    public function list_imovel() {
      
        return view('imoveis.imoveis');
    }

    public function list_inquilinos() {
       
        return view('inquilinos.list-inquilinos');
    }

}
