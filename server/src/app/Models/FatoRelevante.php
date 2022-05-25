<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class FatoRelevante extends Model
{
    use HasFactory;
    protected $table = 'fatos_relevantes';
    protected $fillable = ['acao_id', 'divulgado_em', 'resumo','url'];
    protected $casts = [
        'divulgado_em' => 'date',
    ];

    public function acao()
    {
        return $this->belongsTo(Acao::class);
    }

    public function setDivulgadoEmAttribute($value) {
        $this->attributes['divulgado_em'] = Carbon::createFromFormat('d/m/Y',$value);
    }
}
