<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FatoRelevante extends Model
{
    use HasFactory;
    protected $table = 'fatos_relevantes';
    protected $dateFormat = 'd/m/y';
    protected $fillable = ['acao_id', 'divulgado_em', 'resumo','url'];
    protected $casts = [
        'divulgado_em' => 'date',
    ];
}
