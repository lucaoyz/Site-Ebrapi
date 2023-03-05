<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = [
        'ca_id',
        'no_titulo',
        'no_corpo',
        'no_data',
    ];

    protected $dates = [
        'no_data',
    ];

    public function NoticiaParaFotoNoticia() {
        return $this->hasOne(FotoNoticia::class, 'no_id', 'id');
    }

    public function categoriaId()
    {
        return $this->belongsTo(Categoria::class, 'ca_id', 'id');
    }


}
