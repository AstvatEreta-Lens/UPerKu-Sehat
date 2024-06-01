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
                        <a href="{{ route('foods.edit', $food->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
