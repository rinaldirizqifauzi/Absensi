@extends('layouts.app')

@section('title')
    <center>Jadwal Kegiatan Guru</center>
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
                        <a href="{{ route('jadwalguru.mulai') }}" class="btn btn-masuk me-3" role="button">
                            Mulai Kegiatan
                        </a>
                        <a href="{{ route('jadwalguru.selesai') }}" class="btn btn-keluar me-3" role="button">
                            Kegiatan Selesai
                        </a>
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
                        <th scope="col">Kegiatan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Mulai</th>
                        <th scope="col">Selesai</th>
                        <th scope="col">Aksi</th>
                        {{-- <th scope="col">Jam Kerja</th> --}}
                      </tr>
                    </thead>
                    <tbody class="table-body">
                        @foreach ($jadwalguru as $field)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $field->kegiatan->nama_kegiatan }}</td>
                            <td>{{ $field->tgl }}</td>
                            <td>{{ $field->mulai }}</td>
                            <td>{{ $field->selesai }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="{{ route('jadwalguru.hapus', $field->id) }}" class="form-control btn btn-sm btn-keluar">Hapus</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </ul>
            </div>
            <div class="container">
                <div class="d-grid my-3 gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary px-4" href="{{ route('jadwalinfo.index') }}">Kembali</a>
                </div>
            </div>
       </div>
    </div>
</div>
@endsection
