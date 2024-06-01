<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showAll(){
        $users = User::all();
        $totalAdmin = User::where('role', 'admin')->count();
        $totalDokter = User::where('role', 'dokter')->count();
        $totalMahasiswa = User::where('role', 'mahasiswa')->count();
        return view('admin-side.admin-dash', compact('users','totalAdmin','totalDokter','totalMahasiswa'));
    
    }

    public function showAdminPanel(){
        $users = User::all();
        $totalAdmin = User::where('role', 'admin')->count();
        $totalDokter = User::where('role', 'dokter')->count();
        $totalMahasiswa = User::where('role', 'mahasiswa')->count();
        return view('admin-side.usermanage-admin',compact('users','totalAdmin','totalDokter','totalMahasiswa'));
    }
    public function createUser(){
        return view('admin-side.create-admin');
    }

    public function store(Request $request){
        //Validasi data yang diinput oleh user
        User::create($request->all());

        return redirect()->route('adminpanel')
            ->with('success', 'New User created successfully.');

    }
    public function destroy(User $user)
    { 
        $user->delete();
        return redirect()->route('adminpanel')
            ->with('success', 'Inventory deleted successfully');
    }

    public function edit(User $user){
        return view('admin-side.edit-admin', compact('user'));
    }

    public function update(Request $request, User $user){
        $user->update($request->all());
        return redirect()->route('adminpanel')->with('success','User updated successfully');
    }

    
}
