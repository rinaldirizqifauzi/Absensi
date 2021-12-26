@extends('layouts.app')

@section('title')
    <center>Tambah Data Guru</center>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
       <div class="card">
          <div class="card-body">
             <form action="{{ route('dataguru.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Nama Guru -->
                <div class="form-group">
                    <label for="namaguru" class="font-weight-bold">
                       Nama
                   </label>
                   <input id="namaguru" value="" name="namaguru" type="text" class="form-control @error('namaguru') is-invalid @enderror" />
                   @error('namaguru')
                    <span style="color: red;">
                        {{ $message }}
                    </span>
                   @enderror
                </div>
                <div class="float-right">
                	<a class="btn btn-primary px-4" href="{{ route('dataguru.index') }}">Kembali</a>
                	<button type="submit" class="btn btn-primary px-4">Simpan</button>
                </div>
             </form>
          </div>
       </div>
    </div>
 </div>
@endsection
