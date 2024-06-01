<!-- resources/views/foods/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>JADWAL KONSULTASI </h2>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>DATE</th>
                <th>TIME</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($foods as $food)
                <tr>
                    <td>{{ $food->id }}</td>
                    <td>{{ $food->name }}</td>
                    <td>{{ $food->description }}</td>
                    <td>
                        <a href="{{ route('foods.show', $food->id) }}" class="btn btn-info">View</a>
                        <form action="{{ route('foods.destroy', $food->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
