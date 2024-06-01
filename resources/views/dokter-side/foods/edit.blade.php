<!-- resources/views/foods/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Edit Jadwal Konsultasi</h2>
    <form action="{{ route('foods.update', $food->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">DATE</label>
            <input type="date" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">TIME</label>
            <input type="time" class="form-control" id="description" name="description"required>
        </div>
        <button type="submit" class="btn btn-primary">Update Jadwal Konsultasi</button>
    </form>
@endsection
