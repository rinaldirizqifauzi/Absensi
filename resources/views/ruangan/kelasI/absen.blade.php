@extends('layouts.app')

@section('title')
<center>Absen</center>
@endsection

@section('content')
<div class="row">
    <div class="card">
        @include('components.card-header-menu')
        <div class="card-body">
            <form action="{{ route('rkelassatu.absen.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <center>
                                    <label for="namasiswa_id" class="my-2"> Nama Siswa </label>
                                </center>
                                <select name="namasiswa_id" id="namasiswa_id" class="form-control">
                                    <option value="" disabled selected>Nama Siswa</option>
                                    @foreach ($kelassatu as $field)
                                        <option value="{{ $field->id }}">{{ $field->nama_siswa }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <center>
                                    <label for="keterangan" class="my-2">Ambil Absen</label>
                                </center>
                                <select id="keterangan" name="keterangan" id="keterangan" data-placeholder="" class="form-control">
                                <option value="" selected disabled>Ambil Absen Siswa</option>
                                <option value="Hadir" @if (old('keterangan') == "Hadir") {{ 'selected' }} @endif>Hadir</option>
                                <option value="Terlambat" @if (old('keterangan') == "Terlambat") {{ 'selected' }} @endif>Terlambat</option>
                                <option value="Tidak Hadir" @if (old('keterangan') == "Tidak Hadir") {{ 'selected' }} @endif>Tidak Hadir</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <center>
                                    <label for="alasan" class="my-2">
                                        Keterangan
                                    </label>
                                </center>
                                <input type="text" name="alasan" id="alasam" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="d-grid my-3 gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-primary px-4" href="{{ route('rkelassatu') }}">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
