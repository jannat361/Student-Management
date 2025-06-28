@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Student</h2>
    <form method="POST" action="{{ route('students.update', $student->id) }}">
        @csrf @method('PUT')
        <input type="text" name="name" class="form-control mb-2" value="{{ $student->name }}" required>
        <input type="email" name="email" class="form-control mb-2" value="{{ $student->email }}" required>
        <input type="text" name="phone" class="form-control mb-2" value="{{ $student->phone }}" required>
        <input type="date" name="dob" class="form-control mb-2" value="{{ $student->dob }}" required>
        <button type="submit" class="btn btn-success">Update Student</button>
    </form>
</div>
@endsection
