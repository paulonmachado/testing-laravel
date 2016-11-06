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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
    ];
});

$factory->define(App\Card::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->sentence,
    ];
});

$factory->define(App\Note::class, function (Faker\Generator $faker) {

    return [
        'body' => $faker->sentence,
        'user_id' => rand(1, 10),
        'card_id' => rand(1, 50),
    ];
});
