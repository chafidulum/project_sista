<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
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

Route::get('/', function () {
    return view('admin.content');
});
Route::get('/home', function () {
    return view('admin.content');
});



// mahasiswa
route::resource('mahasiswa', MahasiswaController::class);
route::resource('dosen', DosenController::class);