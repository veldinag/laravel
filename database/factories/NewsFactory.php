<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => 2,
            'source_id' => 7,
            'title' => fake()->text(50),
            'author' => fake()->name(),
            'status' => 'DRAFT',
            'description' => fake()->text(250),
            'text' => fake()->text(500)

        ];
    }
}
