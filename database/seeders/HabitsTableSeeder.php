<?php

namespace Database\Seeders;

use App\Models\Habit;
use Illuminate\Database\Seeder;

class HabitsTableSeeder extends Seeder
{
    public function run()
    {
        // Membuat data habit dummy
        Habit::create([
            'name' => 'Workout',
            'icon_default' => 'assets/workout.png',
            'icon_status' => json_encode(['assets/book.png', 'assets/meditate.png', 'assets/workout.png', 'assets/water.png']),
            'goal_time' => 'daily',
            'goal_status' => json_encode([false, false, true, false, true, false, false]),
            'time_options' => json_encode(['all day', 'morning', 'afternoon', 'night']),
        ]);

        Habit::create([
            'name' => 'Reading',
            'icon_default' => 'assets/book.png',
            'icon_status' => json_encode(['assets/meditate.png', 'assets/workout.png', 'assets/book.png', 'assets/water.png']),
            'goal_time' => 'daily',
            'goal_status' => json_encode([true, true, true, false, false, false, false]),
            'time_options' => json_encode(['morning', 'afternoon']),
        ]);

        Habit::create([
            'name' => 'Meditation',
            'icon_default' => 'assets/meditate.png',
            'icon_status' => json_encode(['assets/meditate.png', 'assets/workout.png', 'assets/book.png', 'assets/water.png']),
            'goal_time' => 'daily',
            'goal_status' => json_encode([true, false, true, false, false, true, false]),
            'time_options' => json_encode(['morning', 'night']),
        ]);

        Habit::create([
            'name' => 'Drinking Water',
            'icon_default' => 'assets/water.png',
            'icon_status' => json_encode(['assets/burn.png', 'assets/steps.png', 'assets/bed.png']),
            'goal_time' => 'daily',
            'goal_status' => json_encode([false, false, false, true, true, false, false]),
            'time_options' => json_encode(['morning', 'afternoon', 'night']),
        ]);
    }
}
