<!-- resources/views/riwayat/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>REKAM MEDIS</h2>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>UMUR</th>
                <th>JENIS KELAMIN</th>
                <th>GEJALA</th>
                <th>DIAGNOSA</th>
                <th>RESEP</th>
                <th>CATATAN</th>
            </tr>
        </thead>
        <tbody>
            @foreach($riwayat as $rekam)
                <tr>
                    @php
                    $i=1;
                    @endphp
                    <td>{{ $i++ }}</td>
                    <td>{{ $rekam->nama }}</td>
                    <td>{{ $rekam->umur }}</td>
                    <td>{{ $rekam->gender }}</td>
                    <td>{{ $rekam->gejala }}</td>
                    <td>{{ $rekam->diagnosa }}</td>
                    <td>{{ $rekam->resep }}</td>
                    <td>{{ $rekam->catatan }}</td>
                    <td>
                        <a href="{{ route('riwayat.show', $rekam->id) }}" class="btn btn-info">View</a>
                        <form action="{{ route('riwayat.destroy', $rekam->id) }}" method="POST" style="display:inline">
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
