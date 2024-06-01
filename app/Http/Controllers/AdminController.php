<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   function index()
   {
      echo "<h1> Selamat Datang " . Auth::user()->role . "</h1>";
      echo "<h2>" . Auth::user()->name . "</h2>";
      echo "<a href = '/logout'> Logout </a>";
   }
   function admin()
   {
      return view('admin-side.app');
   }
   function dokter()
   {
      return view('dokter-side.landing-page-dokter');
   }
   function mahasiswa(){
      // echo "<h1> Selamat Datang di Halaman ". Auth::user()->role ."</h1>";
      // echo "<h2>". Auth::user()->name ."</h2>";
      // echo "<a href = '/logout'> Logout </a>";
      return view('mahasiswa-side.landing-page-mahasiswa');
  
     }
}
