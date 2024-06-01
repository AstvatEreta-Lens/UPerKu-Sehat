<!-- resources/views/chating/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>{{ $chat->name }}</h2>
    <a href="{{ route('chating.edit', $chat->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('chating.destroy', $chat->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('chating.index') }}" class="btn btn-secondary">Back to List</a>
@endsection

