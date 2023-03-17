<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_id',
        'pa_id',
        'pro_nome',
        'pro_logo',
    ];

    public function subCategoriaId()
    {
        return $this->belongsTo(SubCategoria::class, 'sub_id', 'id');
    }

    public function parceirosId()
    {
        return $this->belongsTo(Parceiro::class, 'pa_id', 'id');
    }
}
