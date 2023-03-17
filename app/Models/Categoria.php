<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'ca_nome',
    ];

    public function CategoriaParaSubCategoria() {
        return $this->hasOne(SubCategoria::class, 'ca_id', 'id');
    }


}
