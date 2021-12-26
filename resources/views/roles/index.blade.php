@extends('layouts.app')

@section('title')
    <h1><center>Data Hak Akses</center></h1>
@endsection

@section('content')
<div class="row my-3">
    <div class="col-md-12">
       <div class="card">
          <div class="card-header">
             <div class="row">
                <div class="col-md-4">
                   <form action="" method="GET" class="form-inline form-row">
                      <div class="col">
                         <div class="input-group mx-1">
                            <input name="keyword" type="search" class="form-control" placeholder="Cari">
                            <div class="input-group-append">
                               <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search"></i>
                               </button>
                            </div>
                         </div>
                      </div>
                   </form>
                </div>
                <div class="col-md-6">
                   <a href="{{ route('akses.create') }}" class="btn btn-primary float-right" role="button">
                      Tambah Data
                      <i class="fas fa-plus-square"></i>
                   </a>
                </div>
             </div>
          </div>
          <div class="card-body">
           <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Hak Akses</th>
                        <th scope="col">Nama Hak Akses</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($roles as $role)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->permissions->pluck('name') }}</td>
                            {{-- <td>{{ $role->permissions }}</td> --}}
                            <td>
                                <form action="{{ route('akses.destroy', ['akse' => $role]) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn bg-danger" onclick="return confirm('Are You Sure?')">
                                        <li class="fas fa-trash" style="color: white"></li>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <p>
                            <strong>
                                Nama hak akses tidak ditemukan
                            </strong>
                        </p>
                        @endforelse
                    </tbody>
                </table>
            </div>
           </div>
           <a href="{{ route('dataguru.index') }}" class="btn btn-primary"> Kembali</a>
          </div>
       </div>
    </div>
</div>
@endsection
