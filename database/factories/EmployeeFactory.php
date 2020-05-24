<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'birth_date' => $faker->date('Y-m-d','now'),
        'position' => $faker->jobTitle,
        'contacts' => $faker->phoneNumber,
        'img_path' => $faker->imageUrl($width = 286, $height = 180),
        'files' => $faker->fileExtension,
        'comments' => $faker->paragraph,
    ];
});
