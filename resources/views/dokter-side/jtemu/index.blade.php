<!-- resources/views/jtemu/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>JADWAL TEMU </h2>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>NO</th>
                <th>DATE</th>
                <th>TIME</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jtemu as $temu)
                <tr>
                    <td>{{ $temu->id }}</td>
                    <td>{{ $temu->date }}</td>
                    <td>{{ $temu->time }}</td>
                    <td>
                        <a href="{{ route('jtemu.show', $temu->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('jtemu.edit', $temu->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
