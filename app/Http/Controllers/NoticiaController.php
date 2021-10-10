<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Noticia;

class NoticiaController extends Controller
{
   
    public function index(){
      
        $noticias = Noticia::all();
        return view('noticias.index',[
            'noticias' => $noticias
        ]);

    }

    public function create(){
        return view('noticias.create');
    }


}
