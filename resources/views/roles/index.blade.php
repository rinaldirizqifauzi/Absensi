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
                       <a href="{{ route('akses.create') }}" class="btn btn-masuk me-3" role="button">
                           Tambah Hak Akses
                       </a>
                   </div>
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
                                <div class="container">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <form action="{{ route('akses.destroy', ['akse' => $role]) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm bg-danger" onclick="return confirm('Are You Sure?')">
                                                <li class="fas fa-trash" style="color: white"></li>
                                            </button>
                                        </form>
                                    </div>
                                </div>
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
           <div class="container">
                <div class="d-grid my-3 gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary px-4" href="{{ route('dataguru.index') }}">Kembali</a>
                </div>
            </div>
          </div>
       </div>
    </div>
</div>
@endsection
