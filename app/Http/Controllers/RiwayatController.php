<?php

namespace App\Http\Controllers;

use App\Models\Riwayat ;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index()
    {
        $riwayat = Riwayat::all();
        return view('riwayat.index', compact('riwayat'));
    }

    public function create()
    {
        return view('dokter-side.riwayat.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nama'  => 'required',
        //     'umur'  => 'required',
        //     'gender'  => 'required',
        //     'gejala'  => 'required',
        //     'diagnosa'  => 'required',
        //     'resep'  => 'required',
        //     'catatan'  => 'required',
        // ]);
        Riwayat ::create($request->all());

        return redirect()->route('riwayat')
            ->with('success', 'Riwayat  created successfully.');
    }

    public function show(Riwayat  $rekam)
    {
        return view('riwayat.show', compact('riwayat'));
    }

    public function edit(Riwayat $rekam)
    {
        return view('riwayat.edit', compact('riwayat'));
    }

    public function update(Request $request, Riwayat $rekam)
    {
        $request->validate([
            'nama'  => 'required',
            'umur'  => 'required',
            'gender'  => 'required',
            'gejala'  => 'required',
            'diagnosa'  => 'required',
            'resep'  => 'required',
            'catatan'  => 'required',
        ]);

        $rekam->update($request->all());

        return redirect()->route('riwayat')
            ->with('success', 'Food updated successfully');
    }

    public function destroy(Riwayat $rekam)
    {
        $rekam->delete();

        return redirect()->route('riwayat')
            ->with('success', 'Food deleted successfully');
    }
}
