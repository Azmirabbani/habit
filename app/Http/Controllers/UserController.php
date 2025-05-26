<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Ambil semua user beserta habitsnya
    public function index()
    {
        return response()->json(User::with('habits')->get());
    }

    // Ambil detail user (tanpa habits)
    public function show(User $user)
    {
        return response()->json($user);
    }

    // Ambil habits milik user tertentu
    public function habits(User $user)
    {
        return response()->json($user->habits);
    }

    public function store(Request $request)
    {
        // Validasi data request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        // Buat user baru, ingat password harus di-hash
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Response dengan user yang baru dibuat
        return response()->json($user, 201);
    }
}
