<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Food;
use App\Models\Temu;
use App\Models\Riwayat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PendataanController extends Controller
{

public function showPriceList(){
    $foods = Food::all();
    return view('home.pendataan', compact('foods'));
}
public function showJadwal(){
    $foods = Food::all();
    return view('konsultasi', compact('foods'));
}

public function hapus(){
    $foods = Food::all();
    return view('foods.hapus', compact('foods'));
}

public function showJadwalTemu(){
    $jtemu = Temu::all();
    return view('temu', compact('jtemu'));
}

public function hapusTemu(){
    $jtemu = Temu::all();
    return view('jtemu.hapus', compact('jtemu'));
}

public function showRekamMedis(){
    $riwayat = Riwayat::all();
    return view('dokter-side.riwayat', compact('riwayat'));
}

public function hapusRekam(){
    $riwayat = Riwayat::all();
    return view('riwayat.hapus', compact('riwayat'));
}

public function showChat(){
    $chating = Chat::all();
    return view('chat', compact('chating'));
}

public function hapusChat(){
    $chating = Chat::all();
    return view('chating.hapus', compact('chating'));
}

}



