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
                    @php
                    $i=1;
                    @endphp
                    <td>{{ $i++ }}</td>
                    <td>{{ $temu->date }}</td>
                    <td>{{ $temu->time }}</td>
                    <td>
                        <a href="{{ route('jtemu.show', $temu->id) }}" class="btn btn-info">View</a>
                        <form action="{{ route('jtemu.destroy', $temu->id) }}" method="POST" style="display:inline">
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
