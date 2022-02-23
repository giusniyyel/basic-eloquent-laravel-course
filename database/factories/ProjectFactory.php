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
    public function definition()
    {
        return [
            'city_id' => $this->faker->numberBetween(1, 30),
            'company_id' => $this->faker->numberBetween(1, 30),
            'user_id' => $this->faker->numberBetween(1, 3),
            'name' => $this->faker->sentence(),
            'execution_date' => $this->faker->date(),
            'is_active' => $this->faker->boolean()
        ];
    }
}
