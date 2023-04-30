@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Enroll</h1>
        <form action="{{ route('admin.update', $enroll->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="child_name">Child's Name:</label>
                <input type="text" name="child_name" id="child_name" class="form-control" value="{{ $enroll->child_name }}" required>
            </div>
            <div class="form-group">
                <label for="time_slot">Time Slot:</label>
                <input type="text" name="time_slot" id="time_slot" class="form-control" value="{{ $enroll->time_slot }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Enroll</button>
        </form>
    </div>
@endsection
