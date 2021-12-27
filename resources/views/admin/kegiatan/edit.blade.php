@extends('layouts.app')

@section('title')
<center>    Tambah Kegiatan</center>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="card">
        @include('components.card-header-menu')
          <div class="card-body">
             <form action="{{ route('admin.kegiatan.update', $kegiatan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <!-- Nama Guru -->
                        <div class="form-group">
                            <center>
                                <label for="nama_kegiatan" class="font-weight-bold">
                                    Nama Kegiatan
                                </label>
                            </center>
                           <input id="nama_kegiatan" value="{{ $kegiatan->nama_kegiatan }}" name="nama_kegiatan" type="text" class="input form-control @error('nama_kegiatan') is-invalid @enderror" />
                           @error('nama_kegiatan')
                            <span style="color: red;">
                                {{ $message }}
                            </span>
                           @enderror
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="d-grid my-4 gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary px-4" href="{{ route('admin.kegiatan') }}">Kembali</a>
                        <button type="submit" class="btn btn-primary px-4">Ubah</button>
                    </div>
                </div>
             </form>
          </div>
       </div>
    </div>
</div>
@endsection
