<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

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
            'user_id' => $this->faker->numberBetween(1, 30),
            'name' => $this->faker->sentence(),
            'execution_date' => $this->faker->date(),
            'is_active' => $this->faker->boolean()
        ];
    }
}
