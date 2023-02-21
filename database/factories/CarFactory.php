<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'car_name' => fake()->word(),
            'car_type' => fake()->word(),
            'car_price' => fake()->numberBetween(1000, 100000),
            'car_picture' => pathinfo(File::files((storage_path('app/cars/images')))[rand(1, 10)])['filename'] . '.png',
            'car_desc' => fake()->word(),
        ];
    }
}
