@extends('layouts.app')

@section('title')
    <center>Tambah Data Kegiatan Guru</center>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="card">
             <form action="" method="POST">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-5">
                           <form action="" method="GET" class="form-inline form-row">
                              <div class="col">
                                 <div class="input-group mx-1">
                                    <input name="keyword" type="search" class="form-control" placeholder="Cari">
                                    <div class="input-group-append">
                                        <button class="btn btn-search" type="submit">
                                            <i class="fas fa-search"></i>
                                       </button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="col-md-7">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{ route('dashboard.index') }}" class="btn btn-search ">Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <form action="{{ route('jadwalguru.store') }}" method="POST">
                                {{ csrf_field() }}
                                   <!-- Nama Kegiatan -->
                                    <div class="form-group">
                                        <center>
                                            <label for="kegiatan_id" class="font-weight-bold">
                                                Kegiatan
                                            </label>
                                        </center>
                                        <select name="kegiatan_id" id="kegiatan_id" class="input form-control @error('kegiatan_id') is-invalid @enderror">
                                            <option value="" selected disabled>Pilih</option>
                                            @foreach ($datakegiatan as $field)
                                                <option value="{{ $field->id }}">{{ $field->nama_kegiatan }}</option>
                                            @endforeach
                                        </select>
                                        @error('kegiatan_id')
                                            <span style="color: red">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
                                            </span>
                                        @enderror
                                    </div>
                                <div class="form-group">
                                    <center>
                                        <label id="clock" style="font-size: 100px; color: #0A77DE; -webkit-text-stroke: 3px #00ACFE;
                                            text-shadow: 4px 4px 10px #36D6FE,
                                            4px 4px 20px #36D6FE,
                                            4px 4px 30px #36D6FE,
                                            4px 4px 40px #36D6FE;">

                                        </label>
                                    </center>
                                </div>
                                <center>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-masuk ">Mulai Kegiatan</button>
                                    </div>
                                </center>
                            </form>
                        </div>
                    </div>
                <div class="container">
                    <div class="d-grid my-3 gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary px-4" href="{{ route('jadwalguru.index') }}">Kembali</a>
                    </div>
                </div>
             </form>
       </div>
    </div>
</div>

@endsection
