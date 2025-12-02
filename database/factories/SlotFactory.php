<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slot>
 */
class SlotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $time = fake()->dateTimeBetween('2011-05-15','2011-05-15');
        $capacity = 50;
        return [
            'start_time' => $time,
            'end_time' => $time,
            'capacity' => $capacity
        ];
    }
}
