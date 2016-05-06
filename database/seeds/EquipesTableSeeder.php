<?php

use Illuminate\Database\Seeder;

use Brasil\Equipe;

class EquipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipe::truncate();
        
        factory(Equipe::class, 10)->create();
    }
}
