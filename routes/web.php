<?php
use App\Dosen;
use App\Jurusan;
use App\Mahasiswa;
use App\wali;
use App\Matkul_mahasiswa;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('soal1', function() {
 		$dosen = Dosen::where('nama', 'like', '%yulianto%')->get();
 		return View::make('soal01', compact('dosen'));
	});
Route::get('soal2', function() {
 		$wali = wali::where('nama', 'like', '%Achmad S%')->get();
 		return View::make('soal02', compact('wali'));
	});
 Route::get('soal3', function() {
 		$jurusan = Jurusan::with('mahasiswa')->get();
 		return View::make('soal03', compact('jurusan'));
	});
	Route::get('bonus', function() {

		# Ambil semua data siswa (lengkap dengan semua relasi yang ada)
		$mahasiswa = Mahasiswa::all();

		# Kirim variabel ke View
		return View::make('bonus', compact('mahasiswa'));
	});
	