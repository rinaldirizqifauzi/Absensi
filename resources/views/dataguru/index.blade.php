@extends('layouts.app')

@section('title')
    <center>Data</center>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
      Featured
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('users.index') }}">
                                <blockquote class="blockquote mb-0">
                                    <p><i class="fa fa-duotone fa-users fa-3x"></i> Data Pengguna</p>
                                </blockquote>
                            </a>
                         </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                          <a href="{{ route('akses.index') }}">
                            <blockquote class="blockquote mb-0">
                             <p><i class="fa fa-regular fa-universal-access fa-3x"></i> Data Hak Akses</p>
                            </blockquote>
                          </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                          <a href="{{ route('akses.index') }}">
                            <blockquote class="blockquote mb-0">
                             <p><i class="fa fa-regular fa-universal-access fa-3x"></i> Data Hak Akses</p>
                            </blockquote>
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('dashboard.index') }}" class="btn btn-primary">Kembali</a>
    </div>
  </div>

@endsection
