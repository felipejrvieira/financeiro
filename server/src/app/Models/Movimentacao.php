<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    use HasFactory;

    protected $table = 'movimentacoes';
    protected $dateFormat = 'd/m/y';
    protected $fillable = ['descricao', 'executada_em', 'valor', 'conta_id','categoria_id','user_id'];
    protected $casts = [
        'efetuado_em' => 'date',
        'preco' => 'decimal:2',
    ];

    public function conta()
    {
        return $this->belongsTo(Conta::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
