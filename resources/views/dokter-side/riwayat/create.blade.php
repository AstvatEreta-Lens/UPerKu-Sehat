<!-- resources/views/foods/create.blade.php -->

@extends('dokter-side.layouts.app')

@section('content')
    <h2>Add Riwayat Pasien </h2>
    <form action="{{ route('riwayat.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">NAMA</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="umur" class="form-label">UMUR</label>
            <input type="number" id="umur" name="umur" min="18" max="100" required>
        </div>

        <div class="mb-3">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="gejala" class="form-label">gejala</label>
            <input type="text" class="form-control" id="gejala" name="gejala"required>
        </div>
        <div class="mb-3">
            <label for="diagnosa" class="form-label">diagnosa</label>
            <input type="text" class="form-control" id="diagnosa" name="diagnosa"required>
        </div>
        <div class="mb-3">
            <label for="resep" class="form-label">RESEP</label>
            <input type="text" class="form-control" id="resep" name="resep"required>
        </div>
        <div class="mb-3">
            <label for="catatan" class="form-label">CATATAN</label>
            <input type="text" class="form-control" id="catatan" name="catatan"required>
        </div>
        <button type="submit" class="btn btn-primary">Add Rekam Medis</button>
    </form>
@endsection
