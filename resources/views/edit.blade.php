@extends('layouts.app')

@section('content')
    <h1>Edit Habit</h1>

    <form action="{{ route('habits.update', $habit->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input name="name" value="{{ $habit->name }}" placeholder="Name"><br>

        <input name="icon_default" value="{{ $habit->icon_default }}" placeholder="Icon Default"><br>

        @php
            $iconStatuses = json_decode($habit->icon_status, true);
        @endphp
        @foreach ($iconStatuses as $index => $icon)
            <input name="icon_status[]" value="{{ $icon }}" placeholder="Icon Status {{ $index + 1 }}"><br>
        @endforeach

        <input name="goal_time" value="{{ $habit->goal_time }}" placeholder="Goal Time"><br>

        @php
            $goalStatuses = json_decode($habit->goal_status, true);
        @endphp
        @foreach ($goalStatuses as $index => $status)
            <label>Goal Hari ke-{{ $index + 1 }}</label>
            <input type="checkbox" name="goal_status[]" value="true" {{ $status ? 'checked' : '' }}><br>
        @endforeach

        @php
            $timeOptions = json_decode($habit->time_options, true);
        @endphp
        @foreach ($timeOptions as $index => $option)
            <input name="time_options[]" value="{{ $option }}" placeholder="Time Option {{ $index + 1 }}"><br>
        @endforeach

        <button type="submit">Update</button>
    </form>
@endsection
