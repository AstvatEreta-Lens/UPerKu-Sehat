<!-- resources/views/riwayat/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>{{ $rekam->name }}</h2>
    <p>{{ $rekam->description }}</p>
    <a href="{{ route('riwayat.edit', $rekam->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('riwayat.destroy', $rekam->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('riwayat.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
