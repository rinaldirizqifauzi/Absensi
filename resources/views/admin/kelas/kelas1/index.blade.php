@extends('layouts.app')

@section('title')
   <center> Kelas I</center>
@endsection

@section('content')
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
                                <a href="{{ route('dashboard.index') }}" class="btn btn-search ">Menu</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-md-7">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('kelassatu.create') }}" class="btn btn-masuk me-3" role="button">
                        <i class="fas fa-folder-plus fa-lg"></i>
                        Tambah Data
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <div class="row">
                <!-- list category -->
               @foreach($kelassatu as $field)
               <div class="my-3 col-lg-6 col-sm-6 portfolio-item ">
                  <div class=" h-100">
                     <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            @if ($field->file)
                                <div style="max-height: 450px; overflow:hidden;">
                                    <img src="{{ asset('storage/' . $field->file) }}" class="img-fluid">
                                </div>
                            @else
                              Foto tidak ada
                            @endif
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{ $field->no_induk }}, {{$field->nama_siswa}} </h5>
                              {{-- <p class="card-text"></p> --}}
                              <p class="card-text">{{$field->tpt_lhr}}, <td>{{ date('d M Y', strtotime($field->tgl_lhr)) }}</td></p>
                              <!-- detail -->
                                 <a href="#" class="btn btn-sm btn-primary" role="button">
                                    <i class="fas fa-eye"></i>
                                 </a>
                                 <!-- edit -->
                                 <a href="{{ route('kelassatu.edit', $field->id) }}" class="btn btn-sm btn-info" role="button">
                                    <i class="fas fa-edit"></i>
                                 </a>
                                 <!-- delete -->
                                <a href="{{ route('kelassatu.destroy', $field->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure?')">
                                    <li class="fas fa-trash" style="color: white"></li>
                                </a>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
               </div>
               @endforeach
            </div>
         </ul>
        <div class="container">
            <div class="d-grid my-3 gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary px-4" href="{{ route('admin.index') }}">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
