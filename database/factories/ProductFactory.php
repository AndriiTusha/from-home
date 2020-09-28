<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
	$title = $faker->words(3, true);
	$categories = \App\Category::all()->pluck('id')->toArray();
    return [
        'name' => $title,
        'slug' => Str::slug($title, '-'), //встроенный метод для замены недопустивых в URL адресе символов
        'img' => 'https://loremflickr.com/320/240',
        'price' => $faker->randomFloat(2,0,100),
        'year' => $faker->numberBetween(1970,2020),
        'odometr' =>$faker->numberBetween(2,200000),
        'engine' => 'diesel',
        'transmission' => '4WD',
        'description' => $faker->paragraphs(3,true),
        'recommended' => $faker->boolean(),
        'category_id' => $faker->shuffle($categories)[0],
     ];
});
