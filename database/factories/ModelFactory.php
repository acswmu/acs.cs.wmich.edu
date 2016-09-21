<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function(Faker\Generator $faker) {
  return [
    'name' => $faker->name,
    'email' => $faker->safeEmail,
    'bio' => $faker->paragraph,
    'website' => $faker->url,
    'admin' => false,
    'confirmed' => true,
    'password' => bcrypt('password'),
    'remember_token' => str_random(10),
  ];
});

$factory->defineAs(App\User::class, 'admin', function(Faker\Generator $faker) {
  return [
    'name' => $faker->name,
    'email' => $faker->safeEmail,
    'bio' => $faker->paragraph,
    'website' => $faker->url,
    'confirmed' => true,
    'admin' => true,
    'password' => bcrypt('password'),
    'remember_token' => str_random(10),
  ];
});

$factory->defineAs(App\User::class, 'base_admin', function(Faker\Generator $faker) {
  return [
    'name' => 'Test',
    'email' => 'test@wmich.edu',
    'bio' => $faker->paragraph,
    'website' => $faker->url,
    'confirmed' => true,
    'admin' => true,
    'password' => bcrypt('password'),
    'remember_token' => str_random(10),
  ];
});

$factory->define(App\AgendaTopic::class, function(Faker\Generator $faker) {
  return [
    'topic' => $faker->sentence,
    'description' => $faker->paragraph,
  ];
});

$factory->defineAs(App\AgendaTopic::class, 'important', function(Faker\Generator $faker) {
  return [
    'topic' => $faker->sentence,
    'description' => $faker->paragraph,
    'important' => true,
  ];
});
