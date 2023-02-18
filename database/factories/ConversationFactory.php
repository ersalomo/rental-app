<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conversation>
 */
class ConversationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users_id = \App\Models\User::get(['id']);
        return [
            'user_id_1' => fake()->randomElement($users_id),
            'user_id_2' => fake()->randomElement($users_id)
        ];
    }
}
