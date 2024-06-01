<?php

namespace App\Http\Controllers;

use App\Models\Chat ;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $chating = Chat::all();
        return view('chating.index', compact('chating'));
    }

    public function create(){
        return view('chating.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Chat ::create($request->all());

        return redirect()->route('chat')
            ->with('success', 'Chat  kirim successfully.');
    }

    public function show(Chat  $chat)
    {
        return view('chating.show', compact('chat'));
    }

    public function edit(Chat $chat)
    {
        return view('chating.edit', compact('chat'));
    }

    public function update(Request $request, Chat $chat)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $chat->update($request->all());

        return redirect()->route('chat')
            ->with('success', 'chat updated successfully');
    }

    public function destroy(Chat $chat)
    {
        $chat->delete();

        return redirect()->route('chat')
            ->with('success', 'chat deleted successfully');
    }
}
