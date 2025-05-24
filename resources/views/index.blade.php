
@extends('layouts.app')

@section('content')
    <h1>Habit List</h1>
    <a href="{{ route('habits.create') }}">Create New Habit</a>

    @foreach ($habits as $habit)
        <div>
            <h3>{{ $habit->name }}</h3>
            <a href="{{ route('habits.edit', $habit) }}">Edit</a>
            <form action="{{ route('habits.destroy', $habit) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection
