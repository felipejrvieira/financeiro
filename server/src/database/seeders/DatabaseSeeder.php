<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Segmento;
use App\Models\Acao;
use App\Models\Ordem;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //User::factory(2)->create();
         User::create(['name'=>'Felipe',
          'email'=>'felipejrvieira@gmail.com',
          'email_verified_at' => now(),
          'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
          'remember_token' => Str::random(10)]);
          User::create(['name'=>'Manoela',
          'email'=>'manoelareisoliveira@gmail.com',
          'email_verified_at' => now(),
          'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
          'remember_token' => Str::random(10)]);
         //Segmento::create(['descricao'=>'Bancos']);
         //Segmento::create(['descricao'=>'Energia Elétrica']);
         //Acao::create(['ticker'=>'ITSA4', 'nome'=>'Itaúsa', 'segmento_id'=>1]);
         //Acao::create(['ticker'=>'XPBR33', 'nome'=>'XP', 'segmento_id'=>1]);
         //Acao::create(['ticker'=>'BBAS3', 'nome'=>'Banco do Brasil', 'segmento_id'=>1]);
         //Acao::create(['ticker'=>'ENBR3', 'nome'=>'Energia Brasil', 'segmento_id'=>2]);
         //Acao::create(['ticker'=>'ALUP11', 'nome'=>'Alupar', 'segmento_id'=>2]);
         //Ordem::factory(50)->create();
    }
}
