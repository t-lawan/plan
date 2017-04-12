<?php
use App\User;
use App\Project;
use App\Task;
use App\Stage;
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
        'name' => 'Thomas Lawanson',
        'email' => 'thomas@email.com',
        'password' => bcrypt('thomas'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Project::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
        'completed' => $faker->numberBetween($min = 0, $max = 1),
    ];
});


$factory->define(App\Task::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'body' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
        'rating_id' => $faker->numberBetween($min = 1, $max = 3),

        'stage_id' => $faker->numberBetween($min = 1, $max = 3),
    ];
});
