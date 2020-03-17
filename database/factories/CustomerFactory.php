<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Customer;

$factory->define(Customer::class, function (Faker $faker) use ($factory) {
    return [
        'user_id' => $factory->create(App\User::class)->id,
        'name' => $faker->name,
        'contacted_ at' => now(),
        'active' => $faker->numberBetween($min = 0, $max = 1),
        'created_at' =>now(),
        'updated_at' => now(),
    ];
});
