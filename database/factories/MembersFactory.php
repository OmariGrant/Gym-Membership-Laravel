<?php

use Faker\Generator as Faker;

$factory->define(App\Members::class, function (Faker $faker) {

  //array for Subscription
  $subscription = ['M', 'Y'];

    return [
        //factory for members

        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'email' => $faker->email,
        'address1' => $faker->streetAddress,
        'address2' => $faker->city,
        'postcode' => $faker->postcode,
        'DOB' => $faker->date,
        'phone' => $faker->randomNumber,
        'subscription' => array_random($subscription),
    ];
});
