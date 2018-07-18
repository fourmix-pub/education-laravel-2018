<?php

use Faker\Factory as Faker;

$faker = Faker::create('ja_JP');

$factory->define(App\Recipe::class, function () use ($faker) {
    return [
        'user_id' => 1,
        'title' => $faker->text(25),
        'material' => $faker->realText(200,5),
        'content' => $faker->realText(200, 5),
        'is_published' => true,
    ];
});
