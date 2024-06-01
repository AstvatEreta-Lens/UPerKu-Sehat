<!-- resources/views/foods/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>kirim pesan</h2>
    <form action="{{ route('chating.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">KIRIM PESAN</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">kirim</button>
    </form>
@endsection
