<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provento extends Model
{
    use HasFactory;
    protected $fillable = ['acao_id', 'user_id', 'tipo', 'data_com', 'pagamento_em', 'valor'];
    protected $casts = [
        'data_com' => 'date',
        'pagamento_em' => 'date',
        'valor' => 'decimal:2',
    ];
}
