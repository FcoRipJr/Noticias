<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            "categoria" => "Esporte",
        ]);

        Categoria::create([
            "categoria" => "Economia",
        ]);
        Categoria::create([
            "categoria" => "Eleições",
        ]);
        Categoria::create([
            "categoria" => "Laser",
        ]);
        Categoria::create([
            "categoria" => "Entretenimento",
        ]);
    }
}
