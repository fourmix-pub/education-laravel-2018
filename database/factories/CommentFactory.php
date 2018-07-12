<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
      'user_id' => 1,
      'contents' => $faker->realText(200, 5),
      'movie_id' => 1,
    ];
});
