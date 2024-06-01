<?php

namespace App\Http\Controllers;

use App\Models\Temu ;
use Illuminate\Http\Request;

class JtemuController extends Controller
{
    public function index()
    {
        $jtemu = Temu ::all();
        return view('jtemu.index', compact('jtemu'));
    }

    public function create()
    {
        return view('jtemu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'time' => 'required',

        ]);

        Temu ::create($request->all());

        return redirect()->route('temu')
            ->with('success', 'Temu  created successfully.');
    }

    public function show(Temu  $temu)
    {
        return view('jtemu.show', compact('temu'));
    }

    public function edit(Temu $temu)
    {
        return view('jtemu.edit', compact('temu'));
    }

    public function update(Request $request, Temu $temu)
    {
        $request->validate([
            'date' => 'required',
            'time' => 'required',
        ]);

        $temu->update($request->all());

        return redirect()->route('temu')
            ->with('success', 'Food updated successfully');
    }

    public function destroy(Temu $temu)
    {
        $temu->delete();

        return redirect()->route('temu')
            ->with('success', 'Food deleted successfully');
    }
}
