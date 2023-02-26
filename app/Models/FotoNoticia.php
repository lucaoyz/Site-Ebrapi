<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoNoticia extends Model
{
    use HasFactory;

    protected $fillable = [
        'fn_ordem',
        'fn_imagem',
    ];

    public function FotoNoticiaParaNoticia() {
        return $this->hasOne(Noticia::class, 'fn_id', 'id');
    }

}
