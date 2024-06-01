<!-- resources/views/chating/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Edit Jadwal chat</h2>
    <form action="{{ route('chating.update', $chat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">KIRIM PESAN</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Jadwal chat</button>
    </form>
@endsection
