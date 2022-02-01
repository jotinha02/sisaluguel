<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class AlugueisController extends Controller
{
    public function list_alugueis() {
      
        return view('list-alugados.alugueis');
    }

}
