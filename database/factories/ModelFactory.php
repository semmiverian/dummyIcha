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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Company::class, function (Faker\Generator $faker) {
    return [
        'nama' => $faker->name,
        'alamat' => $faker->address,
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'nama' => $faker->name,
        'company_id' =>$faker->numberBetween(1,10),
        'lokasi' => $faker->address,
        'ukuran' =>$faker->numberBetween(200,1000),
        'fasilitas'=>$faker->randomElement($array = array ('exclusive','wifi','telepon')),
        'jenis'=>$faker->randomElement($array = array ('premium','super','luxury')),
    ];
});
