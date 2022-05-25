<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Ordem extends Model
{
    use HasFactory;

    protected $table = 'ordens';
    protected $fillable = ['acao_id', 'user_id', 'fato_id', 'tipo', 'efetuado_em', 'quantidade', 'preco','taxa'];
    protected $casts = [
        'efetuado_em' => 'date',
        'preco' => 'decimal:2',
        'taxa' => 'decimal:2',
    ];

    public function acao()
    {
        return $this->belongsTo(Acao::class);
    }

    public function fatoRelevante()
    {
        return $this->belongsTo(FatoRelevante::class);
    }

    public function setEfetuadoEmAttribute($value) {
        $this->attributes['efetuado_em'] = Carbon::createFromFormat('d/m/Y',$value);
    }
}
