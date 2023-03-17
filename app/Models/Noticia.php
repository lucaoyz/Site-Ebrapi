<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_titulo',
        'no_autor',
        'no_corpo',
        'no_img',
        'no_data',
    ];

    protected $dates = [
        'no_data',
    ];

    public function NoticiaParaFotoNoticia() {
        return $this->hasOne(FotoNoticia::class, 'no_id', 'id');
    }


}
