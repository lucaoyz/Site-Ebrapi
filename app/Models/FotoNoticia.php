<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoNoticia extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_id',
        'fn_ordem',
        'fn_imagem',
    ];

    public function NoticiaId() {
        return $this->belongsTo(Noticia::class, 'no_id', 'id');
    }

}
