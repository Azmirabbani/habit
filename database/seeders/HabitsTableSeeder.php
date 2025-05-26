<?php

namespace Database\Seeders;

use App\Models\Habit;
use Illuminate\Database\Seeder;

class HabitsTableSeeder extends Seeder
{
    public function run()
    {
        Habit::create([
            'name' => 'Morning Run',
            'icon_default' => 'default-icon.png',
            'icon_status' => json_encode([
                'active' => 'icon-active.png',
                'inactive' => 'icon-inactive.png'
            ]),
            'goal_time' => 'daily',
            'goal_status' => json_encode([
                'completed' => 2,
                'in_progress' => 1,
                'not_started' => 0
            ]),
            'time_options' => json_encode(['morning', 'evening']),
            'user_id' => 1,

            
        ]);

        Habit::create([
            'name' => 'Drink Water',
            'icon_default' => 'default-icon.png',
            'icon_status' => json_encode([
                'active' => 'icon-active.png',
                'inactive' => 'icon-inactive.png',
            ]),
            'goal_time' => 'daily',
            'goal_status' => json_encode([
                'completed' => 3,
                'in_progress' => 2,
                'not_started' => 2,
            ]),
            'time_options' => json_encode(['morning', 'afternoon', 'evening']),
            'user_id' => 1,
        ]);

        Habit::create([
            'name' => 'Read Book',
            'icon_default' => 'book-icon.png',
            'icon_status' => json_encode([
                'active' => 'book-active.png',
                'inactive' => 'book-inactive.png',
            ]),
            'goal_time' => 'weekly',
            'goal_status' => json_encode([
                'completed' => 1,
                'in_progress' => 0,
                'not_started' => 6,
            ]),
            'time_options' => json_encode(['night']),
            'user_id' => 2,
         ]);
    }
}
