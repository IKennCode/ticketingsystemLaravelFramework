<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TicketsFactory extends Factory
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
            'status' => $this->faker->numberBetween(0, 6),
            'opened_by' => $this->faker->numberBetween(0, 102),
            'created_by' => $this->faker->numberBetween(0, 102),
            'updated_by' => $this->faker->numberBetween(0, 102),
            'resolved_by' => $this->faker->numberBetween(0, 102),
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'resolved_at' => $this->faker->dateTimeBetween('-1 years', 'now')
        ];
    }
}
