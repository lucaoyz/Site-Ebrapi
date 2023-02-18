<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sobre extends Model
{
    use HasFactory;

    protected $fillable = [
        'sob_sobre',
        'sob_missao',
    ];

}
