<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => fake()->randomDigitNotNull(),
            'name' => fake()->lastName(),
            'start_date' => fake()->dateTimeBetween('-3 month', '+3 week'),
            'duration' => fake()->randomDigitNotNull(),
        ];
    }
}
 