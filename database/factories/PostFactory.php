<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Illuminate\Support\Str;

$factory->define(Post::class, function () {
    return [
        'title' => $title = $this->faker->sentence(),
        'slug' => Str::slug($title),
        'body' => $this->faker->text(100),
    ];
});
