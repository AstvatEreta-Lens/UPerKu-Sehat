<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email wajib diisi Kang/teteh',
                'password.required' => 'password wajib diisi Kang/teteh',
            ]

        );

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,

        ];

        if (Auth::attempt($infologin)) {

            if (Auth::user()->role == 'admin') {
                return redirect('admin/admin');
            } else if (Auth::user()->role == 'dokter') {
                return redirect('dokter/dokter');
            }
            else if (Auth::user()->role == 'mahasiswa') {
                return redirect('mahasiswa/mahasiswa');
            }
        } else {
            return redirect('')->withErrors('Username atau Password salah');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
