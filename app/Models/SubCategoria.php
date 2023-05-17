<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'ca_id',
        'sub_nome',
    ];

    public function categoriaId()
    {
        return $this->belongsTo(Categoria::class, 'ca_id', 'id');
    }

    public function SubCategoriaParaProduto() {
        return $this->hasOne(Produto::class, 'sub_id', 'id');
    }

    public function SubCategoriaParaParceiro() {
        return $this->hasOne(Parceiro::class, 'sub_id', 'id');
    }

}
