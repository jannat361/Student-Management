@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Welcome, {{ Auth::user()->name }}</h1>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Students</h5>
                    <p class="card-text">{{ \App\Models\Student::count() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
