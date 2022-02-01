<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquilino extends Model
{
    use HasFactory;

    public $table = 'inquilinos';

    public $fillable = [
        'id',
        'nome',
        'cpf',
        'telefone',
        'email',
        'imovel',
    ];

    public $timestamps = false;
}
