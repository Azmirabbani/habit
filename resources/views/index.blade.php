@extends('layouts.app')

@section('content')
    <h1>User List</h1>
    <a href="{{ route('users.create') }}">Create New User</a>

    @foreach ($users as $user)
        <div>
            <h3>{{ $user->name }} ({{ $user->email }})</h3>
            <p>Habits: {{ $user->habits->pluck('name')->join(', ') }}</p>
            <a href="{{ route('users.edit', $user) }}">Edit</a>
            <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection
