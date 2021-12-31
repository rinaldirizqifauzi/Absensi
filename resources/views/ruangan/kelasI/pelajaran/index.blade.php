@extends('layouts.app')

@section('title')
    <center>Mata Pelajaran</center>
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
                            <!-- Mata Pelajaran -->
                            <button type="button" class="btn btn-masuk me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Tambah
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            @include('ruangan.kelasI.pelajaran._mpljr-list',[
                                'mpl' => $mpl,
                                'count' => 0
                            ])
                        </div>
                    </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Mata Pelajaran</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                    <div class="modal-body">
                                        <form action="{{ route('rkelassatu.mpljr.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <center>
                                                    <label for="judul"> Judul</label>
                                                </center>
                                                <input type="text" name="judul" class="form-control my-2 @error('judul') is-invalid @enderror" value="" placeholder="Isikan Judul">
                                                @error('judul')
                                                    <span style="color: red">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <center>
                                                    <label for="parent_id"> Sub Judul</label>
                                                </center>
                                                <select name="parent_id" id="parent_id" class="form-control my-2">
                                                    <option value="" selected disabled> Pilih</option>
                                                    @foreach ($mpl as $field)
                                                        <option value="{{ $field->id }}">{{ $field->judul }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <div class="container">
                    <div class="d-grid my-3 gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary px-4" href="{{ route('rkelassatu') }}">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
