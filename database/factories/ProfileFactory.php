<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            // 'first_name' => fake()->name(),
            // 'last_name' => fake()->lastName(),
            // 'avatar' => fake()->imageUrl(),
            // 'user_id' => User::factory(),
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->lastName(),
            'avatar' => $this->faker->imageUrl(),
            'user_id' => User::factory(),
        ];
    }
}
