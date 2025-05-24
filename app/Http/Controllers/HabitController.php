<?php

namespace App\Http\Controllers;

use App\Models\Habit;
use Illuminate\Http\Request;

class HabitController extends Controller
{
    public function index()
    {
        $habits = Habit::all();
        return view('habits.index', compact('habits'));
    }

    public function create()
    {
        return view('habits.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'icon_default' => 'required',
            'icon_status' => 'required',
            'goal_time' => 'required',
            'goal_status' => 'required',
            'time_options' => 'required',
        ]);

        Habit::create([
            'name' => $request->name,
            'icon_default' => $request->icon_default,
            'icon_status' => json_encode($request->icon_status),
            'goal_time' => $request->goal_time,
            'goal_status' => json_encode($request->goal_status),
            'time_options' => json_encode($request->time_options),
        ]);

        return redirect()->route('habits.index')->with('success', 'Habit created successfully.');
    }

    public function edit(Habit $habit)
    {
        return view('habits.edit', compact('habit'));
    }

    public function update(Request $request, Habit $habit)
    {
        $request->validate([
            'name' => 'required',
            'icon_default' => 'required',
            'icon_status' => 'required',
            'goal_time' => 'required',
            'goal_status' => 'required',
            'time_options' => 'required',
        ]);

        $habit->update([
            'name' => $request->name,
            'icon_default' => $request->icon_default,
            'icon_status' => json_encode($request->icon_status),
            'goal_time' => $request->goal_time,
            'goal_status' => json_encode($request->goal_status),
            'time_options' => json_encode($request->time_options),
        ]);

        return redirect()->route('habits.index')->with('success', 'Habit updated successfully.');
    }

    public function destroy(Habit $habit)
    {
        $habit->delete();
        return redirect()->route('habits.index')->with('success', 'Habit deleted successfully.');
    }
}
