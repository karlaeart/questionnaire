<?php

/** @var Factory $factory */

use App\Model;
use App\Models\Answer;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Answer::class, function (Faker $faker) {
    return [
        'text' => $faker->text
    ];
});
