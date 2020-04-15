<?php

use Illuminate\Support\Str;
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
function randomnum($number)
{
    $max = pow(10, $number) - 1;
    $randn = mt_rand(0, $max);

    if (in_array($randn, [138, 333, 470, 644])) {
        return randomnum($number);
    }
    return $randn;
}

function imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false)
{
    if ($randomize) {
        $randomize_number =  randomnum(3);
    }

    $baseUrl = "https://i.picsum.photos/id/" . $randomize_number . "/";
    $url = "{$width}/{$height}.jpg";
    return $baseUrl . $url;
}

$factory->define(App\Post::class, function (Faker $faker) {
    $users = App\User::pluck('id')->toArray();
    return [
        'user_id' => $faker->randomElement($users),
        'post_content' => $faker->paragraph(),
        'post_title' => $faker->sentence(),
        'post_status' => $faker->randomElement(['PUBLIED','DRAFT']),
        'post_name' => $faker->firstName(),
        'post_type' => 'article',
        'cover_image'  => imageUrl(),
        'post_category' => $faker->randomElement(['vie', 'sociale', 'actualiste']),
    ];
});

