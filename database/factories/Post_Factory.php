<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'    => $faker->sentence,
        'content'  => $faker->paragraph,
        'post_by'  => random_int(1,5)
    ];
});
