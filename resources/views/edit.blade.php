@extends('layouts.app')

@section('content')
    <h1>Edit User</h1>

    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <input name="name" value="{{ $user->name }}" placeholder="Name"><br>
        <input name="email" value="{{ $user->email }}" placeholder="Email"><br>
        <input type="password" name="password" placeholder="New Password (optional)"><br>

        <label>Update Habits:</label><br>
        @foreach ($habits as $habit)
            <label>
                <input type="checkbox" name="habits[]" value="{{ $habit->id }}"
                    {{ $user->habits->contains($habit->id) ? 'checked' : '' }}>
                {{ $habit->name }}
            </label><br>
        @endforeach

        <button type="submit">Update</button>
    </form>
@endsection
