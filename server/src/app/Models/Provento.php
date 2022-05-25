<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Provento extends Model
{
    use HasFactory;
    protected $fillable = ['acao_id', 'user_id', 'fato_id', 'tipo', 'data_com', 'pagamento_em', 'valor'];
    protected $casts = [
        'data_com' => 'date',
        'pagamento_em' => 'date',
        'valor' => 'decimal:2',
    ];

    public function acao()
    {
        return $this->belongsTo(Acao::class);
    }

    public function fatoRelevante()
    {
        return $this->belongsTo(FatoRelevante::class);
    }

    public function setDataComAttribute($value) {
        $this->attributes['data_com'] = Carbon::createFromFormat('d/m/Y',$value);
    }

    public function setPagamentoEmAttribute($value) {
        $this->attributes['pagamento_em'] = Carbon::createFromFormat('d/m/Y',$value);
    }
}
