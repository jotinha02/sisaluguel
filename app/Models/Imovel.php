<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use HasFactory;

    // busca a tabela no bd
    public $table = 'imoveis';

    protected $guarded = [];

    // salva no bd
    public $fillable = [
        'id',
        'nome',
        'estado',
        'cidade',
        'bairro',
        'numero',
        'dia_vencimento',
        'rua',
        'referencia',
        'valor_mensal',
        'status',
    ];

    public function getStatusText(){
        $status = [
            'A' => 'Dispoivel',
            'I' => 'Alugada',
            'N' => 'Inativa'
        ];
        return $status[$this->status];
    }

    public $timestamps = false;
}
