@extends('layouts.app')

@section('title')
    <center>Penjadwalan</center>
@endsection

@section('content')
<div class="card">
    @include('components.card-header-menu')
    <div class="card-body">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="jadwal card">
                        <div class="card-body">
                          <a href="{{ route('jadwalguru.index') }}" class="jadwal-text">
                            <blockquote class="blockquote mb-0">
                             <p >
                                 <i class="fa fa-user-clock fa-3x"></i>
                                     Guru
                            </p>
                            </blockquote>
                          </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="jadwal card">
                        <div class="card-body">
                          <a href="" class="jadwal-text">
                            <blockquote class="blockquote mb-0">
                                <p>
                                    <i class="fa fa-user-clock fa-3x"></i>
                                     Siswa
                                </p>
                            </blockquote>
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-grid my-3 gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary px-4" href="{{ route('dataguru.index') }}">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
