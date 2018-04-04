<?php

use Faker\Generator as Faker;

$factory->define(\App\Questions::class, function (Faker $faker) {
    return [
        'question' => "Quem descobriu Brasil?",
        'type' => \App\Questions::MULTIPLA,
        'open_answer' => "..",
        'close_answer' => "{\"A\": \"Birro\", \"B\":\"Robertinho\",\"C\":\"Henrique\",\"D\":\"PHP\"}",
        'feedback' => "A",
        'user_id' =>1,
    ];
});
