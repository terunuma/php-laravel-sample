@extends('mobile.layouts.default')

@section('content')
<form action="{{ url('top') }}" method="POST">
    {{ csrf_field() }}
    <label for="task-name">Task</label>
    <input type="text" name="name" id="task-name">
    <button type="submit">Add Task</button>
</form>
@endsection