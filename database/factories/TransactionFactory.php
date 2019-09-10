<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Transaction;
use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'qrcode_owner_id' => $faker->randomDigitNotNull,
        'qrcode_id' => $faker->randomDigitNotNull,
        'message' => $faker->text,
        'payment_method' => $faker->word,
        'amount' => $faker->randomDigitNotNull,
        'status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
