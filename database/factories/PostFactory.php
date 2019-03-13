<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->realText,
        'created_at' => now(),
        'updated_at' => now(),
        'user_id' => function () {
          //
          // $user = App\User::where('id', '=', mt_rand(1, App\User::count()))->first();
          //
          // if ($user === null) {
          //   return 1;
          // }

            // $max = App\User::count();
            $max = 1000;

            return mt_rand(1, $max);
        },

        'category_id' => function () {
            $max = 50;

            return mt_rand(1, $max);
        },

        //imageUrl($width = 640, $height = 480) // 'http://lorempixel.com/640/480/'
        'cover_image' => 'noimage.jpg',
    ];
});
