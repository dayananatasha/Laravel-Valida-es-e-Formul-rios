<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

require_once __DIR__ . '/../faker_data/document_number.php';

$factory->define(Client::class, function (Faker $faker) {
    $cpfs = cpfs();
    return [
        'name' => $faker->name,
        'document_number' => $cpfs[array_rand($cpfs, 1)],
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'defaulter' => rand(0, 1),
        'date_birth' => $faker->date(),
        'sex' => rand(1, 10) % 2 == 0 ? 'm' : 'f',
        'physical_disability' => rand(1, 10) % 2 == 0 ? $faker->word : null,
        'marital_status' => 1

    ];
});

            /*
            $table->string('name');
            $table->string('document_number');
            $table->string('email');
            $table->string('phone');
            $table->boolean('defaulter');
            $table->date('date_birth');
            $table->char('sex');
            $table->enum('marital_status', array_keys(\App\Client::MARITAL_STATUS));
            $table->string('physical_disability')->nullable();
            $table->timestamps();*/
