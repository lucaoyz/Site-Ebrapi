<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parceiro extends Model
{
    use HasFactory;

    protected $fillable = [
        'ca_id',
        'sub_id',
        'pa_nome',
        'pa_logo',
        'pa_link',
    ];


    public function ParceiroParaProdutos() {
        return $this->hasOne(Produto::class, 'pa', 'id');
    }

    public function categoriaId()
    {
        return $this->belongsTo(Categoria::class, 'ca_id', 'id');
    }

    public function SubCategoriaId()
    {
        return $this->belongsTo(SubCategoria::class, 'sub_id', 'id');
    }

}
