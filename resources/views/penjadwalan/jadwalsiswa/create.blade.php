@extends('layouts.app')

@section('title')
    <center>Tambah Data Kegiatan Siswa</center>
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
                                    <input name="keyword" type="search" class="form-control " placeholder="Cari">
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
                            <!-- title -->
                            <div class="form-group">
                               <center>
                                   <label for="input_category_title" class="font-weight-bold">
                                     Title
                                  </label>
                               </center>
                               <input id="input_category_title" value="" name="title" type="text" class="input form-control" placeholder="Input Title" />
                            </div>
                        </div>
                    </div>
                <div class="container">
                    <div class="d-grid my-3 gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary px-4" href="{{ route('jadwalsiswa.index') }}">Kembali</a>
                        <button type="submit" class="btn btn-primary px-4">Simpan</button>
                    </div>
                </div>
             </form>
       </div>
    </div>
</div>
@endsection
