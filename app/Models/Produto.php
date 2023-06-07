<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'ca_id',
        'sub_id',
        'pa_id',
        'pro_foto',
        'pro_nome',
        'pro_subtitulo',
        'pro_descricao',
    ];

    public function subCategoriaId()
    {
        return $this->belongsTo(SubCategoria::class, 'sub_id', 'id');
    }

    public function CategoriaId()
    {
        return $this->belongsTo(Categoria::class, 'ca_id', 'id');
    }

    public function parceirosId()
    {
        return $this->belongsTo(Parceiro::class, 'pa_id', 'id');
    }
}
