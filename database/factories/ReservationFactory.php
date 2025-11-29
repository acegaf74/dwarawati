<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sentence = fake()->sentence();
        $char = fake()->numberBetween(1, 2);
        $date = fake()->date();
        return [
            'name' => $sentence,
            'gender' => $char,
            'address' => $sentence,
            'phone_number' => $sentence,
            'date_of_entry' => $date,
            'date_of_exit' => $date,
            'user_id' => 3
        ];
    }
}
