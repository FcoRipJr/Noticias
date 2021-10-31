<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comentario;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comentario::create([
            "conteudo" => "legal",
            "noticia_id" => "1"
        ]);

        Comentario::create([
            "conteudo" => "gostei!!",
            "noticia_id" => "1"

        ]);

        Comentario::create([
            "conteudo" => "bom!!",
            "noticia_id" => "1"

        ]);
    }
}
