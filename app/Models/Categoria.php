<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'ca_nome',
        'ca_tipo',
    ];

    public function CategoriaParaNoticia() {
        return $this->hasOne(Noticia::class, 'ca_id', 'id');
    }

    public function CategoriaParaSubCategoria() {
        return $this->hasOne(SubCategoria::class, 'ca_id', 'id');
    }


}
