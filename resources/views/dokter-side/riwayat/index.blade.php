<!-- resources/views/riwayat/index.blade.php -->

@extends('dokter-side.layouts.app')

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
                    <td>{{ $rekam->id }}</td>
                    <td>{{ $rekam->nama }}</td>
                    <td>{{ $rekam->umur }}</td>
                    <td>{{ $rekam->gender }}</td>
                    <td>{{ $rekam->gejala }}</td>
                    <td>{{ $rekam->diagnosa }}</td>
                    <td>{{ $rekam->resep }}</td>
                    <td>{{ $rekam->catatan }}</td>
                    <td>
                        <a href="{{ route('riwayat.show', $rekam->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('riwayat.edit', $rekam->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
