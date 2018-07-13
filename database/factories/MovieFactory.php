<?php

use Faker\Factory as Faker;

$faker = Faker::create('ja_JP');

$factory->define(App\Movie::class, function () use ($faker) {
  return [
    'user_id' => 1,
    'title' => $faker->text(10),
    'movie_name' => $faker->text(5),
    'contents' => $faker->realText(500, 5),
    'is_published' => true,
  ];
});
