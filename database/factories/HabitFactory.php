<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HabitFactory extends Factory
{
    protected $model = \App\Models\Habit::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'icon_default' => 'default-icon.png',
            'icon_status' => json_encode(['active' => 'icon-active.png', 'inactive' => 'icon-inactive.png']),
            'goal_time' => $this->faker->randomElement(['daily', 'weekly']),
            'goal_status' => json_encode(['not_started' => 0, 'in_progress' => 1, 'completed' => 2]),
            'time_options' => json_encode(['morning', 'evening']),
            'user_id' => null,  // nanti diisi manual
        ];
    }
}
