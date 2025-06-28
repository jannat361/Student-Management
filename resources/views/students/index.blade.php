@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Students List</h2>
    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add Student</a>
    <table class="table table-bordered">
        <thead>
            <tr><th>Name</th><th>Email</th><th>Phone</th><th>DOB</th><th>Actions</th></tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->dob }}</td>
                <td>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
