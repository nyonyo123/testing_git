<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence($nWords=3),//have 3 words
        'photo'=>'backend/brandimg' . $faker->image('public/backend/brandimg',400,300,null,false),
    ];
});
