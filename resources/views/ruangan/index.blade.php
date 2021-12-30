@extends('layouts.app')

@section('title')
    <center>Ruangan</center>
@endsection

@section('content')
<div class="card">
    @include('components.card-header-menu')
    <div class="card-body">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <a href="">
                        <blockquote class="blockquote mb-0">
                            Kelas I
                        </blockquote>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="">
                        <blockquote class="blockquote mb-0">
                            Kelas II
                        </blockquote>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="">
                        <blockquote class="blockquote mb-0">
                            Kelas III
                        </blockquote>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <a href="">
                        <blockquote class="blockquote mb-0">
                            Kelas IV
                        </blockquote>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="">
                        <blockquote class="blockquote mb-0">
                            Kelas V
                        </blockquote>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="">
                        <blockquote class="blockquote mb-0">
                            Kelas VI
                        </blockquote>
                    </a>
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
