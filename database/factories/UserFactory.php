<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'username' =>fake()->userName(),
            'email' => fake()->unique()->safeEmail(),
            'user_type' => fake()->numberBetween($min = 1, $max = 6),
            'is_active' => fake()->randomElement([1, 0]),
            'password' => '$2y$10$K1HJvG7nfS2PxXWLsIBeB.W1gYkC7l5jofLqLHPW.PicLLQnhMyfO', // password
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
