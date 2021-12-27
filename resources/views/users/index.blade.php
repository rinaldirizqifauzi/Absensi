@extends('layouts.app')

@section('title')
    <h1> <center>Data Pengguna</center></h1>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
       <div class="card">
          <div class="card-header">
             <div class="row">
                <div class="col-md-5">
                   <form action="" method="GET">
                      <div class="input-group">
                         <input name="keyword" value="" type="search" class="form-control" placeholder="Cari">
                         <div class="input-group-append">
                            <button class="btn btn-search btn-primary" type="submit">
                               <i class="fas fa-search"></i>
                            </button>
                            <a href="{{ route('dashboard.index') }}" class="btn btn-search ">Menu</a>
                         </div>
                      </div>
                   </form>
                </div>
                <div class="col-md-7">
                   <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('users.create') }}" class="btn btn-masuk me-3" role="button">
                            Tambah Pengguna
                        </a>
                    </div>
                </div>
             </div>
          </div>
          <div class="card-body">
             <div class="row">
                <!-- list users -->
                @forelse ($users as $user)
                <div class="col-md-4">
                    <div class="card my-1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <i class="fas fa-id-badge fa-5x"></i>
                            </div>
                            <div class="col-md-10">
                                <table>
                                <tr>
                                    <th>
                                        Nama
                                    </th>
                                    <td>:</td>
                                    <td>
                                        <!-- show user name -->
                                        {{ $user->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Email
                                    </th>
                                    <td>:</td>
                                    <td>
                                        <!-- show user email -->
                                        {{ $user->email }}

                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Role
                                    </th>
                                    <td>:</td>
                                    <td>
                                        <!-- Show user roles -->
                                        {{ $user->roles->first()->name }}
                                    </td>
                                </tr>
                                </table>
                            </div>
                            <div class="container">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <!-- edit -->
                                <a href="{{ route('users.edit', ['user' => $user]) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <!-- delete -->
                                <form action="{{ route('users.destroy', ['user' => $user]) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure?')">
                                        <li class="fas fa-trash" style="color: white"></li>
                                    </button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                @empty
                    Pengguna tidak ditemukan
                @endforelse
             </div>
             <div class="container">
                <div class="d-grid my-3 gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('dataguru.index') }}" class="btn btn-primary"> Kembali</a>
                </div>
            </div>
          </div>
       </div>
    </div>
 </div>
@endsection
