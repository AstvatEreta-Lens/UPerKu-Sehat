<!-- resources/views/foods/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Add Jadwal Temu </h2>
    <form action="{{ route('jtemu.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="date" class="form-label">DATE</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">TIME</label>
            <input type="time" class="form-control" id="time" name="time"required>
        </div>
        <button type="submit" class="btn btn-primary">Add Date And Time</button>
    </form>
@endsection
