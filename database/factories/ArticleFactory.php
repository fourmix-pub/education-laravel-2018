<?php

use Faker\Factory as Faker;

$faker = Faker::create('ja_JP');

$factory->define(App\Article::class, function () use ($faker) {
    return [
        'user_id' => 1,
        'title' => $faker->text(25),
        'contents' => $faker->realText(200, 5),
        'is_published' => true,
    ];
});
