<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_nome',
    ];

    public function categoriaId()
    {
        return $this->belongsTo(Categoria::class, 'ca_id', 'id');
    }

}
