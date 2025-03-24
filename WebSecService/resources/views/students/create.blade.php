@extends('layouts.master')
@section('title', 'Supermarket Bill')
@section('content')
<div class="container">
    <h2>Add Student</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Gender:</label>
            <select name="gender" class="form-control" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Age:</label>
            <input type="number" name="age" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Birth Year:</label>
            <input type="number" name="birth_year" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Student</button>
    </form>
</div>
@endsection
