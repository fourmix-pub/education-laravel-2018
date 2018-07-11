<?php

use Faker\Generator as Faker;

$factory->define(App\note::class, function (Faker $faker) {
    return [
      'user_id' => 1,
      'title' => $faker->text(25),
      'when' => $faker->realText(200, 5),
      'where' => $faker->realText(200, 5),
      'who' => $faker->realText(200, 5),
      'what' => $faker->realText(200, 5),
      'why' => $faker->realText(200, 5),
      'how' => $faker->realText(200, 5),
      'is_published' => true,
    ];
});
