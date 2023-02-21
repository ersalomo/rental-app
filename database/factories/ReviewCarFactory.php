<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReviewCar>
 */
class ReviewCarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users = \App\Models\User::get(['id']);
        $cars = \App\Models\Car::get(['id']);
        return [
            'car_id' => fake()->randomElement($cars),
            'user_id' => fake()->randomElement($users),
            'desc' => fake()->word(),
            'ratings' => fake()->numberBetween(1, 5)
        ];
    }
}
