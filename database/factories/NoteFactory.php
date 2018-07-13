<?php

use Faker\Factory as Faker;

$faker = Faker::create('ja_JP');

$factory->define(App\Note::class, function()use ($faker) {
    return [
      'user_id' => 1,
      'title' => $faker->text(25),
      'when' => $faker->realText(20, 5),
      'where' => $faker->realText(20, 5),
      'who' => $faker->realText(20, 5),
      'what' => $faker->realText(20, 5),
      'why' => $faker->realText(20, 5),
      'how' => $faker->realText(20, 5),
      'is_published' => true,
    ];
});
