<?php

$factory('App\Courses\Course', [
    'course_category_id'       => $faker->randomElement([1, 2, 3, 4]),
    'name'              => $faker->unique()->bs,
    'usid'              => $faker->randomNumber(6),
    'aim'               => $faker->paragraph(),
    'certification'     => $faker->sentence(),
    'description'       => $faker->paragraph(10),
    'people_per_course' => $faker->randomNumber(2),
    'duration'          => '5 days',
    'fee'               => $faker->randomFloat(2, 20, 1000)
]);

$factory('App\Users\User', [
    'name'            => $faker->name,
    'email'           => $faker->unique()->email,
    'can_create_user' => true,
    'password'        => 'password123'
]);

$factory('App\Courses\Category', [
    'name' => $faker->words(2)
]);
