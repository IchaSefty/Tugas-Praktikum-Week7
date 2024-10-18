<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get("/contact", function () {
    $contacts = [];
    $faker = Faker::create();
    for ($i = 1; $i <= 20; $i++) {
        $contacts[] = [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'phone' => $faker->phoneNumber
        ];
    };
    return view("contact", ['contacts' => $contacts]);
});

Route::get("/register", function () {
    return view("register");
});

Route::get("/home", function () {
    return view("homepage",);
});

