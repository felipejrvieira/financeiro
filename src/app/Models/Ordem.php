<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordem extends Model
{
    use HasFactory;

    protected $table = 'ordens';
    protected $dateFormat = 'd/m/y';
    protected $fillable = ['acao_id', 'user_id', 'fato_id', 'tipo', 'efetuado_em', 'quantidade', 'preco','taxa'];
    protected $casts = [
        'efetuado_em' => 'date',
        'preco' => 'decimal:2',
        'taxa' => 'decimal:2',
    ];
}
