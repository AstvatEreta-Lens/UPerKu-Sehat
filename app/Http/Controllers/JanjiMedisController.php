<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JanjiMedisController extends Controller
{
    public function toJanjiMedis(){
        return view('mahasiswa-side.janji-mahasiswa');
    }
}
