@extends('layouts.app')

@section('title')
    <center>Kegiatan</center>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
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
                            <a href="{{ route('admin.kegiatan.create') }}" class="btn btn-masuk me-3" role="button">
                                <i class="fas fa-folder-plus fa-lg"></i>
                                Tambah Kegiatan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                    <p id="teks"></p>
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <ul class="list-group list-group-flush">
                            <!-- list post -->
                            <table class="table">
                                <thead class="table-header">
                                    <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kegiatan</th>
                                    <th scope="col">Dibuat</th>
                                    <th scope="col"></th>
                                    {{-- <th scope="col">Jam Kerja</th> --}}
                                    </tr>
                                </thead>
                                <tbody class="table-body">
                                    @foreach ($datakegiatan as $field)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $field->nama_kegiatan }}</td>
                                        <td>{{ $field->created_at }}</td>
                                        <td>
                                            <div class="container">
                                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <!-- edit -->
                                                <a href="{{ route('admin.kegiatan.edit', $field->id) }}" class="btn btn-sm btn-info" role="button">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <!-- delete -->
                                                <a href="{{ route('admin.kegiatan.delete', $field->id) }}" class="btn btn-sm btn-danger"  onclick="return confirm('Are You Sure?')"role="button">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </ul>
                        </div>
                    </div>
                    <div class="container">
                        <div class="d-grid my-3 gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-primary px-4" href="{{ route('admin.index') }}">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
