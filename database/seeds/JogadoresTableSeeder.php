<?php

use Illuminate\Database\Seeder;

use Brasil\Jogador;

class JogadoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jogador::truncate();
        
        factory(Jogador::class, 200)->create();
    }
}
