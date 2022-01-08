<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Segmento;
use App\Models\Acao;
use App\Models\Ordem;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(2)->create();
         Segmento::create(['descricao'=>'Bancos']);
         Segmento::create(['descricao'=>'Energia Elétrica']);
         Acao::create(['ticket'=>'ITSA4', 'nome'=>'Itaúsa', 'segmento_id'=>1]);
         Acao::create(['ticket'=>'XPBR33', 'nome'=>'XP', 'segmento_id'=>1]);
         Acao::create(['ticket'=>'BBAS3', 'nome'=>'Banco do Brasil', 'segmento_id'=>1]);
         Acao::create(['ticket'=>'ENBR3', 'nome'=>'Energia Brasil', 'segmento_id'=>2]);
         Acao::create(['ticket'=>'ALUP11', 'nome'=>'Alupar', 'segmento_id'=>2]);
         Ordem::factory(50)->create();
    }
}
