@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Student</h2>
    <form method="POST" action="{{ route('students.store') }}">
        @csrf
        <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
        <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
        <input type="text" name="phone" class="form-control mb-2" placeholder="Phone" required>
        <input type="date" name="dob" class="form-control mb-2" required> 
        <button type="submit" class="btn btn-primary">Add Student</button>
    </form>
</div>
@endsection
