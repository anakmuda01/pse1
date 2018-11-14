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

$factory->define(App\Models\Post::class, function (Faker $faker) {
    $title = $faker->sentence;
    $slug = str_slug($title,'-');
    return [
        'user_id'=> $faker->randomElement([1,2,4]),
        'judul' => $title,
        'slug_judul' => $slug,
        'gambar' => '/photos/shares/peta-pkm-simpang41.jpg',
        'isi' => $faker->paragraph(150),
        'tanggal' => '1 November 2018'
    ];
});
