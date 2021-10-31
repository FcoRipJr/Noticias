<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Noticia;


class Comentario extends Model
{
    use HasFactory;

    public function noticia() 
    {
        return $this->belongsTo(Noticia::class);
    }

}
