<?php

namespace Database\Factories;

use App\Models\planets;  // Usar el nombre correcto del modelo en minúsculas
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\planets>
 */
class planetsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'size' => $this->faker->randomNumber(2),
            'description' => $this->faker->text,
            'moons' => $this->faker->randomNumber(2),
            'image' => $this->faker->imageUrl(),
            'position' => $this->faker->randomNumber(2),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
