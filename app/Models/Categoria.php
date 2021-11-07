<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\Noticia;
use App\Models\NoticiaCategoria;

class Categoria extends Model
{
    use HasFactory;

    public function noticias_categorias()
    {
        return $this->hasMany(NoticiaCategoria::class);
    }

    public function noticias()
    {
        return $this->hasMany(Noticia::class);
    }

   }
