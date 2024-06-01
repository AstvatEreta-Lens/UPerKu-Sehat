<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChatMahasiswaController;
use App\Http\Controllers\JanjiMedisController;
use App\Http\Controllers\PendataanController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/home', function () {
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/logout', [SesiController::class, 'logout']);

    Route::prefix('admin')->group(function () {
        Route::get('/admin', [AdminController::class, 'admin'])->middleware('userAccess:admin');
        Route::get('/dashboard', [UserController::class, 'showAll'])->middleware('userAccess:admin')->name('dashboard');
        Route::get('/manageuser', [UserController::class, 'showAdminPanel'])->middleware('userAccess:admin')->name('adminpanel');
        Route::get('/createuser', [UserController::class, 'createUser'])->middleware('userAccess:admin')->name('create');
        Route::post('/postdata', [UserController::class, 'store'])->middleware('userAccess:admin')->name('store');
        Route::delete('/deletedata/{user}', [UserController::class, 'destroy'])->middleware('userAccess:admin')->name('deleted');
        Route::get('/editdata/{user}', [UserController::class, 'edit'])->middleware('userAccess:admin')->name('edit');
        Route::put('/edit/{user}', [UserController::class, 'update'])->middleware('userAccess:admin')->name('updated');
    });
    Route::redirect('/admin/admin', '/admin/dashboard');
    Route::get('/admin/dokter', [AdminController::class, 'dokter'])->middleware('userAccess:dokter');

    Route::prefix('/dokter')->group(function () {
        Route::get('/dokter', [AdminController::class, 'dokter'])->middleware('userAccess:dokter');
        Route::get('/riwayatRekam', [PendataanController::class, 'showRekamMedis'])->name('riwayatRekam');
        Route::resource('riwayat', RiwayatController::class)->middleware('userAccess:dokter')->name('rwt');
    });
    Route::prefix('/mahasiswa')->group(function () {
        Route::get('/mahasiswa', [AdminController::class, 'mahasiswa'])->middleware('userAccess:mahasiswa')->name('landing');
        Route::get('/chat',[ChatMahasiswaController::class, 'toChat'])->middleware('userAccess:mahasiswa')->name('toPageChat');
        Route::get('/janjimedis',[JanjiMedisController::class, 'toJanjiMedis'])->middleware('userAccess:mahasiswa')->name('toPageJanji');
        
    });
});
