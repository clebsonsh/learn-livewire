<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->catchPhrase(),
            'description' => fake()->text(50),
            'is_done' => fake()->boolean(),
        ];
    }

    /**
     * Set the model's is_done to true.
     */
    public function done(): static
    {
        return $this->state(fn(array $attributes) => [
            'is_done' => true,
        ]);
    }
}
