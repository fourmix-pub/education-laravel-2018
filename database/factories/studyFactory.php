<?php

use Faker\Factory as Faker;

$faker = faker::create('ja_JP');

$factory->define(Model::class, function ()use ($faker) {
    return [
        'user_id' =>1,
        'name' =>$faker->text(25),
        'contents' =>$faker->realtext(255),
    ];
});
