@extends('layouts.app')

@section('title')
    <h1><center>Tambah Pengguna</center></h1>
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
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <form action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                 <!-- name -->
                                    <div class="form-group">
                                        <center>
                                            <label for="input_user_name" class="font-weight-bold my-2">
                                                Name
                                            </label>
                                        </center>
                                        <input id="input_user_name" value="{{ old('name') }}" name="name" type="text" class=" input form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama" />
                                        <!-- error message -->
                                        @error('name')
                                            <span style="color: red">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
                                            </span>
                                        @enderror
                                    </div>
                                  <!-- password -->
                                  <div class="form-group">
                                    <center>
                                        <label for="input_user_password" class="font-weight-bold my-2">
                                            Password
                                        </label>
                                    </center>
                                        <input id="input_user_password" name="password" type="password" class="input form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password" autocomplete="new-password" />
                                        <!-- error message -->
                                        @error('password')
                                        <span style="color: red">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                         <!-- email -->
                                         <div class="form-group">
                                            <center>
                                                <label for="input_user_email" class="font-weight-bold my-2">
                                                    Email
                                                </label>
                                            </center>
                                                <input id="input_user_email" value="{{ old('email') }}" name="email" type="email" class="input form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email" autocomplete="email" />
                                            <!-- error message -->
                                            @error('email')
                                            <span style="color: red">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
                                            </span>
                                            @enderror
                                        </div>
                                     <!-- password_confirmation -->
                                    <div class="form-group">
                                       <center>
                                            <label for="input_user_password_confirmation" class="font-weight-bold my-2">
                                                Password confirmation
                                            </label>
                                       </center>
                                            <input id="input_user_password_confirmation" name="password_confirmation" type="password" class="input form-control @error('password_confirmation') is-invalid @enderror" placeholder="Masukkan Konfirmasi Password" autocomplete="new-password" />
                                        <!-- error message -->
                                        @error('password_confirmation')
                                        <span style="color: red">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- role -->
                            <div class="form-group ">
                                <center>
                                    <label for="select_user_role" class="font-weight-bold my-2">
                                        Role
                                    </label>
                                </center>
                                <select id="select_user_role" name="role" data-placeholder="" class="custom-select w-100 input form-control @error('role') is-invalid @enderror">
                                    <option value="{{ old('role') }}" selected="selected">Role</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                <!-- error message -->
                                @error('role')
                                <span style="color: red">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                                @enderror
                            </div>
                            <div class="container">
                                <div class="d-grid my-3 gap-2 d-md-flex justify-content-md-end">
                                    <a class="btn btn-primary px-4" href="{{ route('users.index') }}">Kembali</a>
                                    <button type="submit" class="btn btn-primary px-4">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>
@endsection

