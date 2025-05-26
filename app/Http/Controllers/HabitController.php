<?php

namespace App\Http\Controllers;

use App\Models\Habit;
use Illuminate\Http\Request;

class HabitController extends Controller
{
    public function index()
    {
        // Tampilkan semua habit beserta relasi user-nya (optional)
        return response()->json(Habit::with('user')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'icon_default' => 'required',
            'icon_status' => 'required|array',
            'goal_time' => 'required',
            'goal_status' => 'required|array',
            'time_options' => 'required|array',
            'user_id' => 'required|exists:users,id',  // validasi user_id
        ]);

        $habit = Habit::create([
            'name' => $request->name,
            'icon_default' => $request->icon_default,
            'icon_status' => json_encode($request->icon_status),
            'goal_time' => $request->goal_time,
            'goal_status' => json_encode($request->goal_status),
            'time_options' => json_encode($request->time_options),
            'user_id' => $request->user_id,
        ]);

        return response()->json($habit, 201);
    }

    public function show(Habit $habit)
    {
        return response()->json($habit->load('user'));
    }

    public function update(Request $request, Habit $habit)
    {
        $request->validate([
            'name' => 'sometimes|required',
            'icon_default' => 'sometimes|required',
            'icon_status' => 'sometimes|required|array',
            'goal_time' => 'sometimes|required',
            'goal_status' => 'sometimes|required|array',
            'time_options' => 'sometimes|required|array',
            'user_id' => 'sometimes|required|exists:users,id',
        ]);

        $habit->update([
            'name' => $request->name ?? $habit->name,
            'icon_default' => $request->icon_default ?? $habit->icon_default,
            'icon_status' => $request->icon_status ? json_encode($request->icon_status) : $habit->icon_status,
            'goal_time' => $request->goal_time ?? $habit->goal_time,
            'goal_status' => $request->goal_status ? json_encode($request->goal_status) : $habit->goal_status,
            'time_options' => $request->time_options ? json_encode($request->time_options) : $habit->time_options,
            'user_id' => $request->user_id ?? $habit->user_id,
        ]);

        return response()->json($habit);
    }

    public function destroy(Habit $habit)
    {
        $habit->delete();
        return response()->json(['message' => 'Habit deleted successfully.']);
    }
}
