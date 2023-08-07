<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(1),
            'description' => $this->faker->paragraph(1),
            'category' => $this->faker->unique()->word(),
            'status' => $this->faker->randomNumber(1, 1, 2),
            'created_by' => $this->faker->randomNumber(1, 1, 2),
            'updated_by' => $this->faker->randomNumber(1, 1, 2),
            'resolved_by' => $this->faker->randomNumber(1, 1, 2),
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'resolved_at' => $this->faker->dateTimeBetween('-1 years', 'now')
        ];
    }
}
