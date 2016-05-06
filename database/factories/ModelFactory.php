<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Brasil\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Brasil\Equipe::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->company,
        'uf' => $faker->stateAbbr,
        'estadio' => $faker->name,
    ];
});

$factory->define(Brasil\Jogador::class, function (Faker\Generator $faker) {
    return [
        'equipe_id' => Brasil\Equipe::all()->random()->id,
        'nome' => $faker->name,
        'idade' => $faker->numberBetween(18, 45),
        'posicao' => $faker->randomElement(array ('Goleiro','Zagueiro','Lateral', 'Volante', 'Meia', 'Ponta', 'Atacante')),
    ];
});