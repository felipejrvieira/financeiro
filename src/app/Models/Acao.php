<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acao extends Model
{
    use HasFactory;

    protected $table = 'acoes';
    protected $fillable = ['ticket', 'nome', 'segmento_id'];

    public function segmento(){
        return $this->belongsTo(Segmento::class);
    }
}
