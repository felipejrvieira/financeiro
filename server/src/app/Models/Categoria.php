<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'categoria_id'];

    public function subcategorias(){
        return $this->hasMany(Categoria::class);
    }

    public function superior()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function movimentacoes(){
        return $this->hasMany(Movimentacao::class);
    }
}
