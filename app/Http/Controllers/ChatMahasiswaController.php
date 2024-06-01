<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatMahasiswaController extends Controller
{
    public function toChat(){
        return view('mahasiswa-side.chat-mahasiswa');
    }
    public function backToPage(){
        return view('mahasiswa-side.landing-page-mahasiswa');
    }
}
