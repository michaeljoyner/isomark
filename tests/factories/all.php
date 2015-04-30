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

$factory('App\Courses\Workshop', [
    'name' => $faker->unique()->words(3),
    'duration' => 'Half a day',
    'fee' => 'R450.00'
]);

$factory('App\Courses\BookingEnquiry', [
    'name' => $faker->name,
    'email' => $faker->email,
    'phone' => $faker->randomNumber(5),
    'company' => $faker->words(2),
    'course_names' => $faker->words(3),
    'course_usids' => $faker->randomNumber(5),
    'enquiry' => $faker->paragraph()
]);
