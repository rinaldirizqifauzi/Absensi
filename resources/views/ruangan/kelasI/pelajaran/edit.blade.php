@extends('layouts.app')

@section('title')
    <center>Edit Mata Pelajaran</center>
@endsection

@section('content')
@include('components.card-header-menu')
<div class="card">
    <div class="card-body">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form action="{{ route('rkelassatu.mpljr.update', $mpl->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <center>
                            <label for="judul"> Judul</label>
                        </center>
                        <input type="text" name="judul" class="form-control my-2 @error('judul') is-invalid @enderror" value="{{ $mpl->judul }}" placeholder="Isikan Judul">
                        @error('judul')
                            <span style="color: red">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                    </div>
                    <div class="container">
                        <div class="d-grid my-3 gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                            <a class="btn btn-primary px-4" href="{{ route('rkelassatu.mpljr') }}">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
