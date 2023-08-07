<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->name(),
            'middle_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'birthdate' => $this->faker->dateTimeBetween('-18 years', 'now'),
            'gender' => $this->faker->randomNumber(1, 1, 2),
            'marital_status' => $this->faker->randomNumber(1, 1, 6),
            'department' => $this->faker->randomNumber(1, 1, 6),
            'position' => $this->faker->randomNumber(1, 1, 6),
            'hired_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'permission' => $this->faker->randomNumber(1, 1, 3),
            'username' => $this->faker->unique()->name(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'status' => $this->faker->randomNumber(1, 0, 2),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
