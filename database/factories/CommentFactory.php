<?php

use Faker\Factory as Faker;

$faker = Faker::create('ja_JP');

$factory->define(App\Comment::class, function () use ($faker) {
    return [
        'user_id' => 1,
        'name' => $faker->text(25),
        'content' => $faker->realText(200, 5),
    ];
});
