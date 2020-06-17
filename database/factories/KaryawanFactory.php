<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Karyawan;
use Faker\Generator as Faker;

$factory->define(Karyawan::class, function (Faker $faker) {
    return [
        'perusahaan_id' => $faker->numberBetween($min=1, $max=5),
        'nama' => $faker->name,
        'email' => $faker->companyEmail,
        'no_hp' => $faker->phoneNumber
    ];
});
