@extends('layouts.app')

@section('content')
    <h1>Create User</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <input name="name" placeholder="Name"><br>
        <input name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>

        <label>Assign Habits:</label><br>
        @foreach ($habits as $habit)
            <label><input type="checkbox" name="habits[]" value="{{ $habit->id }}"> {{ $habit->name }}</label><br>
        @endforeach

        <button type="submit">Submit</button>
    </form>
@endsection
