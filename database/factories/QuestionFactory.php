<?php

/** @var Factory $factory */

use App\Model;
use App\Models\Question;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'text' => $faker->text
    ];
});
