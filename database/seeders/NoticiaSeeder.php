<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Noticia;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Noticia::create([
            "titulo" => "MAXIMIANO, DONO DA PRECISA, É ACUSADO DE DAR CALOTE DE R$ 8 MILHÕES EM FUNDO DE PREVIDÊNCIA DA OAB",
            "conteudo" => "Ele é o dono da empresa envolvida na negociação de compra da Covaxin, vendida por um preço mais alto ao governo Bolsonaro.",
            
        ]);
    }
}
