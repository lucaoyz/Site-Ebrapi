<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parceiro extends Model
{
    use HasFactory;

    protected $fillable = [
        'pa_nome',
        'pa_logo',
        'pa_link',
    ];
    
}
