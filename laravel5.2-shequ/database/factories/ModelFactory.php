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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'avatar' => $faker->imageUrl(256,256),
        'confirm_code'=>str_random(48),
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Discussion::class, function (Faker\Generator $faker) {
    $user_id=\App\User::lists('id')->toArray();
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'user_id' => $faker->randomElement($user_id),
        'last_user_id' => $faker->randomElement($user_id),

    ];
});
$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    $user_id=\App\User::lists('id')->toArray();
    $discussion_id=\App\Discussion::lists('id')->toArray();
    return [

        'body' => $faker->paragraph,
        'user_id' => $faker->randomElement($user_id),
        'discussion_id' => $faker->randomElement($discussion_id),

    ];
});
