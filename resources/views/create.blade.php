@extends('layouts.app')

@section('content')
    <h1>Create Habit</h1>
    <form action="{{ route('habits.store') }}" method="POST">
        @csrf
        <input name="name" placeholder="Name"><br>
        <input name="icon_default" placeholder="Icon Default"><br>
        <input name="icon_status[]" placeholder="Icon Status 1"><br>
        <input name="icon_status[]" placeholder="Icon Status 2"><br>
        <input name="goal_time" placeholder="Goal Time"><br>
        <input name="goal_status[]" type="checkbox" value="true"> Goal Senin<br>
        <input name="goal_status[]" type="checkbox" value="false"> Goal Selasa<br>
        <input name="time_options[]" placeholder="Time Option 1"><br>
        <input name="time_options[]" placeholder="Time Option 2"><br>
        <button type="submit">Submit</button>
    </form>
@endsection
