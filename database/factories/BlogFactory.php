<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tenant_id' => random_int(1, 2),
            'author_id' => random_int(1, 3),
            'class_id' => random_int(1, 3),
            'title' => fake()->sentence(),
            'text' => fake()->text(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Blog $blog) {
            $url = 'https://source.unsplash.com/random/1200x800';
            $blog
                ->addMediaFromUrl($url)
                ->toMediaCollection();
        });
    }
}
