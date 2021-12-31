<?php

use App\Models\User;
use App\Models\Mpljrsatu;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\KelassatuController;
use App\Http\Controllers\MpljrsatuController;
use App\Http\Controllers\RuangankelassatuController;


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
    // return Mpljrsatu::where('parent_id', 0)->with(str_repeat('children.', 99))->get();

    return view('welcome');
});


Route::group(['prefix' => 'dashboard/admin/kelas1', 'middleware' => ['auth']],function(){
    Route::get('/', [KelassatuController::class, 'index'])->name('kelassatu.index');
    Route::get('/create', [KelassatuController::class, 'create'])->name('kelassatu.create');
    Route::post('store', [KelassatuController::class, 'store'])->name('kelassatu.store');
    Route::get('/edit/{id}', [KelassatuController::class, 'edit'])->name('kelassatu.edit');
    Route::post('update/{id}', [KelassatuController::class, 'update'])->name('kelassatu.update');
    Route::get('destroy/{id}', [KelassatuController::class, 'destroy'])->name('kelassatu.destroy');
});

// Ruangan > Kelas I
Route::group(['prefix' => 'dashboard/ruangan/kelas1', 'middleware' => ['auth']],function(){
    Route::get('/', [RuangankelassatuController::class, 'index'])->name('rkelassatu');
    // Absensi
    Route::get('/absen', [RuangankelassatuController::class, 'absen'])->name('rkelassatu.absen');
    Route::post('/absen/store', [RuangankelassatuController::class, 'store'])->name('rkelassatu.absen.store');
    Route::get('/absen/edit/{id}', [RuangankelassatuController::class, 'edit'])->name('rkelassatu.absen.edit');
    Route::post('/absen/update/{id}', [RuangankelassatuController::class, 'update'])->name('rkelassatu.absen.update');
    Route::get('/absen/delete/{id}', [RuangankelassatuController::class, 'delete'])->name('rkelassatu.delete');

    //Mata Pelajaran
    Route::get('/matapelajaran', [MpljrsatuController::class, 'index'])->name('rkelassatu.mpljr');
    Route::post('/store', [MpljrsatuController::class, 'store'])->name('rkelassatu.mpljr.store');
    Route::get('/matapelajaran/edit/{id}', [MpljrsatuController::class, 'edit'])->name('rkelassatu.mpljr.edit');
    Route::post('/matapelajaran/update/{id}', [MpljrsatuController::class, 'update'])->name('rkelassatu.mpljr.update');
    Route::get('/matapelajaran/delete/{id}', [MpljrsatuController::class, 'delete'])->name('rkelassatu.mpljr.delete');
});


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']],function(){
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/jadwal', [App\Http\Controllers\JadwalinfoController::class, 'index'])->name('jadwalinfo.index');
    Route::resource('/akses', \App\Http\Controllers\RoleController::class);
    Route::resource('/users', \App\Http\Controllers\UserController::class);
});

Route::group(['prefix' => 'dashboard/jadwalguru', 'middleware' => ['auth']],function(){
    Route::get('/', [App\Http\Controllers\KegiatanController::class, 'index'])->name('jadwalguru.index');
    Route::get('/mulai', [App\Http\Controllers\KegiatanController::class, 'mulai'])->name('jadwalguru.mulai');
    Route::post('/store', [App\Http\Controllers\KegiatanController::class, 'store'])->name('jadwalguru.store');
    Route::get('/selesai', [App\Http\Controllers\KegiatanController::class, 'selesai'])->name('jadwalguru.selesai');
    Route::post('/update', [App\Http\Controllers\KegiatanController::class, 'update'])->name('jadwalguru.update');
    Route::get('/hapus/{id}', [App\Http\Controllers\KegiatanController::class, 'hapus'])->name('jadwalguru.hapus');
});

    // Route Data Guru
Route::group(['prefix' => 'dashboard/', 'middleware' => ['auth']],function(){
    Route::get('/data', [App\Http\Controllers\DataguruController::class,'index'])->name('dataguru.index');
    Route::get('/absen', [App\Http\Controllers\AbsenGuruController::class, 'index'])->name('absenguru.index');
    Route::get('/ruangan', [App\Http\Controllers\RuanganController::class, 'kelas'])->name('ruangan.index');
});

// Route Absen Guru
Route::group(['prefix' => 'dashboard/', 'middleware' => ['auth']],function(){
    Route::get('/absen/masuk', [App\Http\Controllers\AbsenGuruController::class, 'create'])->name('absenguru.create');
    Route::post('/store', [App\Http\Controllers\AbsenGuruController::class, 'store'])->name('absenguru.store');
    Route::get('/absen/keluar', [App\Http\Controllers\AbsenGuruController::class, 'goout'])->name('absenguru.goout');
    Route::post('/ubah', [App\Http\Controllers\AbsenGuruController::class, 'pulang'])->name('absenguru.ubah');
    Route::get('/hapus/{id}', [App\Http\Controllers\AbsenGuruController::class, 'hapus'])->name('absenguru.hapus');
});

// Route Admin
Route::group(['prefix' => 'dashboard/admin', 'middleware' => ['auth']],function(){
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    // Kegiatan
    Route::get('/kegiatan', [App\Http\Controllers\AdminController::class, 'kegiatan'])->name('admin.kegiatan');
    Route::get('/kegiatan/create', [App\Http\Controllers\KegiatanadminController::class, 'create'])->name('admin.kegiatan.create');
    Route::post('/kegiatan/store', [App\Http\Controllers\KegiatanadminController::class, 'store'])->name('admin.kegiatan.store');
    Route::get('/kegiatan/edit/{id}', [App\Http\Controllers\KegiatanadminController::class, 'edit'])->name('admin.kegiatan.edit');
    Route::post('/kegiatan/update/{id}', [App\Http\Controllers\KegiatanadminController::class, 'update'])->name('admin.kegiatan.update');
    Route::get('/delete/{id}', [App\Http\Controllers\KegiatanadminController::class, 'delete'])->name('admin.kegiatan.delete');
    // Kelas
    Route::get('/kelas', [App\Http\Controllers\AdminController::class, 'kelas'])->name('admin.kelas');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
