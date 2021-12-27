<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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
    // $role = Role::find(4);
    // $role->givePermissionTo('Data Show', 'Data Create');
    // dd($role);
    return view('welcome');
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
Route::group(['prefix' => 'dashboard/data', 'middleware' => ['auth']],function(){
    Route::get('/', [App\Http\Controllers\DataguruController::class,'index'])->name('dataguru.index');
});

// Route Absen Guru
Route::group(['prefix' => 'dashboard/absen', 'middleware' => ['auth']],function(){
    Route::get('/', [App\Http\Controllers\AbsenGuruController::class, 'index'])->name('absenguru.index');
    Route::get('/masuk', [App\Http\Controllers\AbsenGuruController::class, 'create'])->name('absenguru.create');
    Route::post('/store', [App\Http\Controllers\AbsenGuruController::class, 'store'])->name('absenguru.store');
    Route::get('/keluar', [App\Http\Controllers\AbsenGuruController::class, 'goout'])->name('absenguru.goout');
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
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
