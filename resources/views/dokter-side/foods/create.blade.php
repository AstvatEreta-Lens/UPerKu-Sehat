<!-- resources/views/foods/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Add Jadwal Konsultasi</h2>
    <form action="{{ route('foods.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">DATE</label>
            <input type="date" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">TIME</label>
            <input type="time" class="form-control" id="description" name="description"required>
        </div>
        <button type="submit" class="btn btn-primary">Add Date And Time</button>
    </form>
@endsection
