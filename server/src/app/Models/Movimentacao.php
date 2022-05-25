<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Movimentacao extends Model
{
    use HasFactory;

    protected $table = 'movimentacoes';
    protected $fillable = ['nome','descricao', 'executada_em', 'valor', 'conta_id','categoria_id','user_id'];
    protected $casts = [
        'executada_em' => 'date',
        'valor' => 'decimal:2',
    ];

    public function conta()
    {
        return $this->belongsTo(Conta::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function setExecutadaEmAttribute($value) {
        $this->attributes['executada_em'] = Carbon::createFromFormat('d/m/Y',$value);
    }
}
