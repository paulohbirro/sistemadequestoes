<?php

use Faker\Generator as Faker;

$factory->define(\App\Questions::class, function (Faker $faker) {
    return [
        'question' => "Quem descobriu ".$faker->streetName."?",
        'type' => "F",
        'open_answer' => "",
        'close_answer' => "{\"A\": \"Pedro Alves Cabral\", \"B\":\"Eu\",\"C\":\"Paulo Birro\",\"D\":\"Mickey mouse\"}",
        'feedback' => "A",
        'users_id' =>$faker->name,
    ];
});
