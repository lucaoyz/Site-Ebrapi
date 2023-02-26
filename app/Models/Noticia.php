<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = [
        'fn_id',
        'no_titulo',
        'no_corpo',
        'no_categoria',
    ];

    protected $dates = [
        'no_data',
    ];

    public function fotoNoticiaId()
    {
        return $this->belongsTo(FotoNoticia::class, 'fn_id', 'id');
    }

}
