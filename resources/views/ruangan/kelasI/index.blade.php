@extends('layouts.app')

@section('title')
    <center>Kelas Satu</center>
@endsection

@section('content')
<div class="row">
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
                       <a href="{{ route('rkelassatu.absen') }}" class="btn btn-masuk me-3" role="button">
                           Absen
                       </a>
                       <a href="{{ route('rkelassatu.mpljr') }}" class="btn btn-masuk me-3" role="button">
                           Mata Pelajaran
                       </a>
                   </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <table class="table">
                            <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Hari/Tanggal</th>
                                  <th scope="col">Nama Siswa</th>
                                  <th scope="col">Keterangan</th>
                                  <th scope="col">Alasan</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach ($rkelassatu as $field)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ date('D d M Y', strtotime($field->tgl)) }}</td>
                                        <td>{{ $field->kelassatu->nama_siswa }}</td>
                                        <td>{{ $field->keterangan }}</td>
                                        <td>{{ $field->alasan }}</td>
                                        <td>
                                            <a href="{{ route('rkelassatu.absen.edit', $field->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <!-- delete -->
                                            <a href="{{ route('rkelassatu.delete', $field->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure?')">
                                                <li class="fas fa-trash" style="color: white"></li>
                                            </a>
                                        </td>
                                    </tr>
                                  @endforeach
                              </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="d-grid my-3 gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary px-4" href="{{ route('ruangan.index') }}">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
