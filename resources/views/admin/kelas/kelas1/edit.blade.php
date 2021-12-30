@extends('layouts.app')

@section('title')
    <center>Edit Data Kelas I</center>
@endsection

@section('content')
<div class="card">
    @include('components.card-header-menu')
      <div class="card-body">
         <form action="{{ route('kelassatu.update', $kelassatu->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
               <div class="container">
                   <div class="row justify-content-center">
                        <div class="col-lg-6">
                                <!-- Nama Siswa -->
                            <div class="form-group">
                                <center>
                                    <label for="nama_siswa" class="font-weight-bold">
                                        Nama Siswa
                                    </label>
                                </center>
                            <input id="nama_siswa" value="{{ $kelassatu->nama_siswa }}" name="nama_siswa" type="text" class="input form-control @error('nama_siswa') is-invalid @enderror" />
                            @error('nama_siswa')
                                <span style="color: red;">
                                    {{ $message }}
                                </span>
                            @enderror
                            </div>
                                    {{-- Nomor Induk Siswa --}}
                            <div class="form-group">
                                <center>
                                    <label for="no_induk" class="font-weight-bold">
                                        Nomor Induk Siswa
                                    </label>
                                </center>
                                <input id="no_induk" value="{{ $kelassatu->no_induk }}" name="no_induk" type="text" class="input form-control @error('no_induk') is-invalid @enderror" />
                                @error('no_induk')
                                    <span style="color: red;">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                                    {{-- Tempat Lahir Siswa --}}
                            <div class="form-group">
                                <center>
                                    <label for="tpt_lhr" class="font-weight-bold">
                                        Tempat Lahir Siswa
                                    </label>
                                </center>
                                <input id="tpt_lhr" value="{{ $kelassatu->tpt_lhr }}" name="tpt_lhr" type="text" class="input form-control @error('tpt_lhr') is-invalid @enderror" />
                                @error('tpt_lhr')
                                <span style="color: red;">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            {{-- Tanggal Lahir Siswa --}}
                            <div class="form-group">
                                <center>
                                    <label for="tgl_lhr" class="font-weight-bold">
                                        Tanggal Lahir Siswa
                                    </label>
                                </center>
                               <input id="tgl_lhr" value="{{ $kelassatu->tgl_lhr }}" name="tgl_lhr" type="date" class="input form-control @error('tgl_lhr') is-invalid @enderror" />
                               @error('tgl_lhr')
                                <span style="color: red;">
                                    {{ $message }}
                                </span>
                               @enderror
                            </div>
                            {{-- Foto Siswa --}}
                            <div class="form-group">
                                <center>
                                    <label for="file" class="font-weight-bold">
                                        Foto
                                    </label>
                                </center>
                                <div class="mb-3">
                                    <input type="hidden" name="oldImage" value="{{ $kelassatu->file }}">
                                    @if ($kelassatu->file)
                                        <img src="{{ asset('storage/' . $kelassatu->file) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                    @else
                                        <img class="img-preview img-fluid mb-3 col-sm-5">
                                    @endif
                                        <input class="form-control  @error('file') is-invalid @enderror"  name="file" type="file" id="file" onchange="previewImage()">
                                </div>
                                @error('file')
                                    <span style="color:red">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
               </div>
            </div>
            <div class="container">
                <div class="d-grid my-3 gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary px-4" href="{{ route('kelassatu.index') }}">Kembali</a>
                    <button type="submit" class="btn btn-primary px-4">Ubah</button>
                </div>
            </div>
         </form>
    </div>
</div>
<script>
    function previewImage(){
        const file = document.querySelector('#file');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(file.files[0]);

        ofReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }

</script>
@endsection

