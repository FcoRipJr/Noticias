<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\Noticia;

class NoticiaCategoria extends Model
{
    use HasFactory;

    protected $table = 'noticias_categorias';

    public function noticias()
    {
        return $this->hasMany(Noticia::class);
    }

    public function categorias()
    {
        return $this->hasMany(Categoria::class);
    }

    
}
