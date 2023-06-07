<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoProduto extends Model
{
    use HasFactory;

    protected $fillable = [
        'pro_id',
        'fp_imagem',
    ];

    public function ProdutoId() {
        return $this->belongsTo(Produto::class, 'pro_id', 'id');
    }

}
