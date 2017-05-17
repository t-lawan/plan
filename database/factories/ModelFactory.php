<?php
use App\User;
use App\Project;
use App\Comment;
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
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Project::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
        'completed' => rand(1,2),
        'user_id' => 1
    ];
});


$factory->define(App\Task::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'body' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
        'user_id' => 1,
        'project_id' => rand(1,2),
        'rating_id' => rand(1,3),
        'stage_id' => rand(1,3),

    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {

    return [
        'body' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
        'user_id' => rand(1,2),
        'task_id' => rand(1,10),
    ];
});
