@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" class="input" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" class="input" required>
        </div>
        <div>
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="input" required>
        </div>
        <button type="submit" class="button">Add Student</button>
    </form>
</div>
@endsection


