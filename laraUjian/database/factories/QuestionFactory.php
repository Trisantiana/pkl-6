<?php 

use Question;
use Faker\Generator as Faker;


$factory->define(Question::class, function (Faker $faker) {
    return [
    	'id' => $faker->randomNumber|20;
        'question' => $faker->unique()->sentence,
        'options' => json_encode([
            'option_a' => $faker->sentence,
            'option_b' => $faker->sentence,
            'option_c' => $faker->sentence,
            'option_d' => $faker->sentence
        ]),
        'answer_key' => $faker->randomElemnet(['a', 'b', 'c', 'd']),
    ];
});