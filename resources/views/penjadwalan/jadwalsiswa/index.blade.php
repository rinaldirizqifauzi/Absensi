@extends('layouts.app')

@section('title')
    <center>Jadwal Kegiatan Siswa</center>
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
                                <a href="{{ route('jadwalsiswa.create') }}" class="btn btn-search ">Menu</a>
                            </div>
                         </div>
                      </div>
                   </form>
                </div>
                <div class="col-md-7">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('jadwalsiswa.create') }}" class="btn btn-masuk me-3" role="button">
                            Tambah Kegiatan
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
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam Masuk</th>
                        <th scope="col">Jam Keluar</th>
                        <th scope="col">Aksi</th>
                        {{-- <th scope="col">Jam Kerja</th> --}}
                      </tr>
                    </thead>
                    <tbody class="table-body">
                        <tr>
                            <th scope="row">1</th>
                            <td>tes</td>
                            <td>tes</td>
                            <td>tes</td>
                            <td>tes</td>
                            <td>
                                <a href="" class="form-control btn btn-sm btn-keluar">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                  </table>
                </ul>
        </div>
       </div>
    </div>
</div>
@endsection
