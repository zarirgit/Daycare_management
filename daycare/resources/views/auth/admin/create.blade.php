@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Enroll</h1>
        <form action="{{ route('admin.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="child_name">Child's Name:</label>
                <input type="text" name="child_name" id="child_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="time_slot">Time Slot:</label>
                <input type="text" name="time_slot" id="time_slot" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Enroll</button>
        </form>
    </div>
@endsection
