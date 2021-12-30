@extends('layouts.app')

@section('title')
    <center>admin</center>
@endsection

@section('content')
<div class="card">
    @include('components.card-header-menu')
    <div class="card-body">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="dashboard-absen">
                        <a href="{{ route('admin.kegiatan') }}"  class="absen-link">
                            <blockquote class="blockquote mb-0">
                                <i class="fa fa-skating fa-3x"></i>
                            </blockquote>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="dashboard-absen">
                        <a href="{{ route('admin.kelas') }}"  class="absen-link">
                            <blockquote class="blockquote mb-0">
                                <i class="fa fa-skating fa-3x"></i>
                            </blockquote>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="dashboard-absen">
                        <a href="{{ route('admin.kelas') }}"  class="absen-link">
                            <blockquote class="blockquote mb-0">
                                <i class="fa fa-skating fa-3x"></i>
                            </blockquote>
                        </a>
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
