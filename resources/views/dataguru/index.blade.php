@extends('layouts.app')

@section('title')
    <center>Data</center>
@endsection

@section('content')
<div class="card">
    @include('components.card-header-menu')
    <div class="card-body">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="dashboard-absen form-control">
                        <a href="{{ route('users.index') }}"  class="absen-link">
                            <blockquote class="blockquote mb-0">
                                <i class="fa fa-duotone fa-users fa-3x"></i><br>
                            </blockquote>
                        </a>
                    </div>
                    <center>Data Pengguna</center>
                </div>
                <div class="col-lg-4">
                    <div class="dashboard-absen form-control">
                        <a href="{{ route('akses.index') }}" class="absen-link">
                        <blockquote class="blockquote mb-0">
                            <i class="fa fa-regular fa-universal-access fa-3x"></i>
                            <div class="row">
                            </div>
                        </blockquote>
                        </a>
                    </div>
                    <center>Data Hak Akses</center>
                </div>
                <div class="col-lg-4">
                    <div class="dashboard-absen form-control">
                        <a href="{{ route('jadwalinfo.index') }}" class="absen-link">
                            <blockquote class="blockquote mb-0">
                                <i class="fa  fa-calendar-alt fa-3x"></i>
                            </blockquote>
                        </a>
                    </div>
                    <center>Data Penjadwalan</center>
                </div>
            </div>
            <div class="row justify-content-center my-4">
                <div class="col-lg-4">
                    <div class="dashboard-absen form-control">
                        <a href="{{ route('admin.index') }}"  class="absen-link">
                            <blockquote class="blockquote mb-0">
                                <i class="fas fa-user-cog fa-3x"></i>
                            </blockquote>
                        </a>
                    </div>
                <center>Data Administrator</center>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-grid my-3 gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary px-4" href="{{ route('dashboard.index') }}">Kembali</a>
            </div>
        </div>
    </div>
</div>

@endsection
