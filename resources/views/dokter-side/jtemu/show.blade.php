<!-- resources/views/jtemu/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>{{ $temu->name }}</h2>
    <p>{{ $temu->description }}</p>
    <a href="{{ route('jtemu.edit', $temu->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('jtemu.destroy', $temu->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('jtemu.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
