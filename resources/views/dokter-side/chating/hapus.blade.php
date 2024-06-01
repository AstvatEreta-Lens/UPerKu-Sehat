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
                    @php
                    $i=1;
                    @endphp
                    <td>{{ $i++ }}</td>
                    <td>{{ $chat->name }}</td>
                    <td>
                        <a href="{{ route('chating.show', $chat->id) }}" class="btn btn-info">View</a>
                        <form action="{{ route('chating.destroy', $chat->id) }}" method="POST" style="display:inline">
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
