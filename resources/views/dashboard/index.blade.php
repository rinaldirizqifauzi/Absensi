@extends('layouts.app')

@section('content')
<img src="{{ asset('img/tes.jpg') }}" class="img-fluid" alt="...">
    <div class="row  justify-content-center">
        <div class="col-lg-4">
            <div class="my-3">
                <div class="dashboard-absen">
                    <a href="{{ route('dataguru.index') }}" class="absen-link">
                        <blockquote class="blockquote mb-0">
                                    <center><p><i class="fa fa-regular fa-users fa-3x"></i> Data</p></center>
                        </blockquote>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="my-3">
                <div class="dashboard-absen">
                    <a href="{{ route('absenguru.index') }}" class="absen-link">
                        <blockquote class="blockquote mb-0">
                                    <center><p><i class="fa fa-regular fa-users fa-3x"></i> Absen</p></center>
                        </blockquote>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
