<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;


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
    Route::resource('/akses', \App\Http\Controllers\RoleController::class);
    Route::resource('/users', \App\Http\Controllers\UserController::class);
});

    // Route Data Guru
Route::group(['prefix' => 'dashboard/data', 'middleware' => ['auth']],function(){
    Route::get('/', [App\Http\Controllers\DataguruController::class,'index'])->name('dataguru.index');
    Route::get('/create', [App\Http\Controllers\DataguruController::class,'create'])->name('dataguru.create');
    Route::post('/store', [App\Http\Controllers\DataguruController::class, 'store'])->name('dataguru.store');
    Route::get('/edit/{id}', [App\Http\Controllers\DataguruController::class, 'edit'])->name('dataguru.edit');
    Route::post('/update/{id}', [App\Http\Controllers\DataguruController::class, 'update'])->name('dataguru.update');
    Route::get('/delete/{id}', [App\Http\Controllers\DataguruController::class, 'delete'])->name('dataguru.delete');
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
