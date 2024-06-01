<!-- resources/views/chating/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>JADWAL chat </h2>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>NO</th>
                <th>chat</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($chating as $chat)
                <tr>
                    <td>{{ $chat->id }}</td>
                    <td>{{ $chat->name }}</td>
                    <td>
                        <a href="{{ route('chating.show', $chat->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('chating.edit', $chat->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
