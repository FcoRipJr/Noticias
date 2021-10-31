<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NoticiaCategoria;

class NoticiaCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NoticiaCategoria::create([
            "noticia_id" => "1",
            "categoria_id" => "2",
        ]);

        NoticiaCategoria::create([
            "noticia_id" => "1",
            "categoria_id" => "1",
        ]);

        NoticiaCategoria::create([
            "noticia_id" => "2",
            "categoria_id" => "3",
        ]);

        NoticiaCategoria::create([
            "noticia_id" => "4",
            "categoria_id" => "2",
        ]);
    }
}
