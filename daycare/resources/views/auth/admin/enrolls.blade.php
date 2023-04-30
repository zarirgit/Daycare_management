@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Enrolls</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Child's Name</th>
                    <th scope="col">Time Slot</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($enrolls as $enroll)
                    <tr>
                        <th scope="row">{{ $enroll->id }}</th>
                        <td>{{ $enroll->child_name }}</td>
                        <td>{{ $enroll->time_slot }}</td>
                        <td>{{ $enroll->created_at }}</td>
                        <td>{{ $enroll->updated_at }}</td>
                        <td>
                            <a href="{{ route('admin.edit', $enroll->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.destroy', $enroll->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

