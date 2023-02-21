<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $conversations = \App\Models\Conversation::get(['id']);
        $users = \App\Models\User::get(['id']);
        return [
            'conversation_id' => fake()->numberBetween(1, 10),
            'user_id' => fake()->randomElement($users),
            'content' => \Str::random(20),
        ];
    }
}
