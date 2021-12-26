@extends('layouts.app')

@section('title')
    <h3 ><center>Absensi</center></h3>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="card">
          <div class="card-header">
             <div class="row">
                <div class="col-md-5">
                   <form action="" method="GET" class="form-inline form-row">
                      <div class="col">
                         <div class="input-group mx-1">
                            <input name="keyword" type="search" class="form-control " placeholder="Cari">
                            <div class="input-group-append">
                                <button class="btn btn-search" type="submit">
                                    <i class="fas fa-search"></i>
                               </button>
                                <a href="{{ route('dashboard.index') }}" class="btn btn-search ">Menu</a>
                            </div>
                         </div>
                      </div>
                   </form>
                </div>
                <div class="col-md-7">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        @can('Absen Masuk')
                        <a href="{{ route('absenguru.create') }}" class="btn btn-masuk me-3" role="button">
                            <i class="fas fa-sign-in-alt fa-lg"></i>
                            Absen Masuk
                        </a>
                        @endcan
                        @can('Absen Keluar')
                            <a href="{{ route('absenguru.goout') }}" class="btn btn-keluar  me-3" role="button">
                                Absen Keluar
                                <i class="fas fa-sign-out-alt fa-lg"></i>
                            </a>
                        @endcan
                    </div>
                </div>
             </div>
          </div>
        <div class="card-body">
            <p id="teks"></p>
             <ul class="list-group list-group-flush">
                <!-- list post -->
                <table class="table">
                    <thead class="table-header">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam Masuk</th>
                        <th scope="col">Jam Keluar</th>
                        @can('Absen Hapus')
                            <th scope="col">Aksi</th>
                        @endcan
                        {{-- <th scope="col">Jam Kerja</th> --}}
                      </tr>
                    </thead>
                    <tbody class="table-body">
                      @foreach ($absenguru as $field)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $field->users->name }}</td>
                            <td>{{ $field->tgl }}</td>
                            <td>{{ $field->jammasuk }}</td>
                            <td>{{ $field->jamkeluar }}</td>
                            @can('Absen Hapus')
                                <td>
                                    <a href="{{ route('absenguru.hapus', $field->id) }}" class="form-control btn btn-sm btn-keluar">Hapus</a>
                                </td>
                            @endcan
                        </tr>
                      @endforeach

                    </tbody>
                  </table>
                </ul>
        </div>
       </div>
    </div>
  </div>
@endsection
