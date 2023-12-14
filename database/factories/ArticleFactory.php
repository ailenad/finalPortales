<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $profileIds = Profile::pluck('id');
        return [
            'title' => $this->faker->text(10),
            'content' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl(),
            'profile_id' =>$this->faker->randomElement($profileIds),
        ];
    }
}

