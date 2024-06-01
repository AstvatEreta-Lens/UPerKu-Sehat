<!-- resources/views/jtemu/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Edit Jadwal Temu</h2>
    <form action="{{ route('jtemu.update', $temu->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="date" class="form-label">DATE</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">TIME</label>
            <input type="time" class="form-control" id="time" name="time"required>
        </div>
        <button type="submit" class="btn btn-primary">Update Jadwal Temu</button>
    </form>
@endsection
